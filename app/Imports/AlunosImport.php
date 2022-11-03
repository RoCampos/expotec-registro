<?php

namespace App\Imports;

use App\Models\Aluno;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
use Maatwebsite\Excel\Concerns\ToCollection;


class AlunosImport implements ToCollection, WithHeadingRow
{
    public function __construct()
    {
        HeadingRowFormatter::default('none');
    }

    public function collection(Collection $rows)
    {
        
        foreach ($rows as $row) {
            if (isset($row['Matricula'])){
                Aluno::create([
                    'matricula' => $row['Matricula'],
                    'nome' => $row['Nome'],
                    'curso' => $row['Codigo'],
                    'turma' => $row['Turma'],
                ]);
            }
        } 


        // return $rows;
    }
}
