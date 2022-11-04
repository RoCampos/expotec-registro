<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use Barryvdh\DomPDF\Facade\Pdf;

class TurmaController extends Controller
{
    public function turmas () {

        $turmas = Aluno::pluck('turma')->unique();
        // return $turmas;
        return view('ponto.turmas', [
            'turmas' => $turmas,
        ]);
    }

    public function turma (Request $request, $turma) {

        $alunos = Aluno::where('turma', $turma)->get();

        return view('ponto.turma', [
            'alunos' => $alunos,
            'turma' => $turma
        ]);

    }

    public function print (Request $request, $turma) {

        $alunos = Aluno::where('turma', $turma)->get();

        $pdf = Pdf::loadView('ponto.turma', [
            'alunos' => $alunos,
            'turma' => $turma,
        ]);

        return $pdf->download("teste.pdf");
    }
}
