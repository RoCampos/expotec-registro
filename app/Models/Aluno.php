<?php

namespace App\Models;

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
}
