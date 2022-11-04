<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    //
    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = false;

    protected $fillable = [
        'matricula', 
        'nome', 
        'curso', 
        'turma',
    ];

    public function pontos () {
    	return $this->hasMany('App\Models\Ponto', 'id');
    }

    /**
     * Função utilizada para contabilizar a partipação do 
     * alunos
     * 
     * 
     */
    public function participacao () {
        $lista = Ponto::where('matricula', $this->id)->get();

        $dias = array();

        foreach ($lista as $registro) {
            $data = Carbon::create($registro->ponto);
            $dias[$data->day] = $data->locale('pt-br')->format('d/m');
        }
        return $dias;
    }
}
