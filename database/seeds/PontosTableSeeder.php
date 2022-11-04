<?php

namespace Database\Seeders;

use App\Models\Aluno;
use App\Models\Ponto;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PontosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $dias = [7,8,9,10,11];

        foreach(Aluno::all() as $aluno) {
            $dia = rand(0,5);

            $data = Carbon::now()->addDays(3);

            for ($i =0; $i < $dia; $i++) {
                $present = rand(0,1);
                if ($present) {
                    //definir dia
                    Ponto::create([
                        'ponto' => $data,
                        'matricula' => $aluno->id,
                    ]);
                }
                $data->addDay();

            }

        }

    }
}
