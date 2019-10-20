<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ivmelo\SUAP\SUAP;
use Carbon\Carbon;

use App\Aluno;
use App\Ponto;

class AlunoController extends Controller
{
    
	public function index()
	{
		return view('aluno.index');
	}

	public function login(Request $request)
	{
		$login = $request->input('username');
		$senha = $request->input('pass');

		$suap = new SUAP;
		try {
			$data = $suap->autenticar($login, $senha);
		} catch (\Exception $e) {
			$data = NULL;
		}
		
		if (isset($data)) {
			//salvar token na sessão
			$request->session()->put('exptoken',$data['token']);
			$request->session()->put('iduser',$login);

			return redirect()->route('mostrar');
		} else {

			try {
				$connected = fopen("http://www.google.com:80/","r");
				if ($connected) {
					return redirect()->route('index');
				}
			} catch (\Exception $e) {
				$request->session()->put('iduser',$login);
				return redirect()->route('mostrar');
			}
			
		}

		return redirect()->route('index');
	}

	public function home()
	{
		return 'home';
	}


	public function mostrar()
	{
		$token = session('exptoken');
		$matricula = session ('iduser');

		//when internet is ok
		if (isset($token) && isset($matricula)) {

			$suap = new SUAP();
			$suap->setToken($token);

			$dados = $suap->getMeusDados();
			
			$data = $this->salvarComInternet($token, $matricula, $dados);

			return response()->view('ponto.ponto', 
				['pontos' => $data['pontos'], 'aluno' => $data['aluno']])
					->header("Refresh", "15;url=/logout");

		} else {

			$data = $this->salvarSemInternet($matricula);

			return response()->view('ponto.ponto', 
				['pontos' => $data['pontos'], 'aluno' => $data['aluno']])
				->header("Refresh", "15;url=/logout");
		}

	}

	public function save($request) {
		return "save";
	}

	public function logout()
	{
		session()->forget('exptoken');
		session()->forget('iduser');
		return redirect()->route('index');
	}


	public function salvarComInternet($token, $matricula, $dados) {
		//encontrar timezone
		$current = Carbon::now();
		$dt = Carbon::parse ($current)->timezone('America/Recife');

		//salvar 
		$aluno = Aluno::where('matricula','=',$matricula)
			->first();

		$ponto = new Ponto;
		$ponto->ponto = $dt;

		if($aluno != NULL) {

			if ($aluno->foto == "null") {
				$aluno->foto = $dados['url_foto_75x100'];
				$aluno->nome = $dados['nome_usual'];
				$aluno->save();
			}

			$ponto->matricula = $aluno->id;
			$ponto->save();
		} else {

			$aluno = new Aluno;
			$aluno->matricula = $matricula;
			$aluno->foto = $dados['url_foto_75x100'];
			$aluno->nome = $dados['nome_usual'];
			$aluno ->save();

			$ponto->matricula = $aluno->id;
			$ponto->save();
		}

		return [
			'pontos' => Ponto::where('matricula', '=', $aluno->id)->get(),
			'aluno' => $aluno
		];
	}

	public function salvarSemInternet ($matricula) {

		$current = Carbon::now();
		$dt = Carbon::parse ($current)->timezone('America/Recife');

		//salvar 
		$aluno = Aluno::where('matricula','=',$matricula)
			->first();

		$ponto = new Ponto;
		$ponto->ponto = $dt;

		if($aluno != NULL) {
			$ponto->matricula = $aluno->id;
			$ponto->save();
		} else {

			$aluno = new Aluno;
			$aluno->matricula = $matricula;
			$aluno->nome = "Não Definido";
			$aluno->foto = 'null';
			$aluno ->save();

			$ponto->matricula = $aluno->id;
			$ponto->save();
		}

		return [
			'pontos' => Ponto::where('matricula', '=', $aluno->id)->get(),
			'aluno' => $aluno
		];
	}

}
