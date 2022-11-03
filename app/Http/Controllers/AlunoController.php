<?php

namespace App\Http\Controllers;

use App\Imports\AlunosImport;
use App\Http\Requests\RegistroRequest;
use App\Models\Aluno;
use App\Models\Ponto;

use Maatwebsite\Excel\Facades\Excel;


class AlunoController extends Controller
{
    
	public function index()
	{
		return view('aluno.index');
	}

	public function register (RegistroRequest $request) {

		//check matrícula
		$matricula = $request->matricula;


		exit;

		//validar o ponto
		$ponto = new Ponto;
		$ponto->matricula = Aluno::where('matricula',$matricula)->first()->id;
		$ponto->ponto = now();
		$ponto->save();

		return back();

	}

	//upload do arquivo
	public function upload (Request $request) {
		return view('aluno.upload');
	} 
	
	public function import (Request $request) {
		
		//checking if the file was send
		if ($request->file()) {

			//storing the file
			$file =  $request->alunos->store('uploads');

			//import data to database
			Excel::import(new AlunosImport, $file);
		}
		return redirect()->route('index');

	} 

}
