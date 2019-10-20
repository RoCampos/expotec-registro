<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ponto extends Model
{
    //
    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = false;

    public function aluno () {
    	return $this->belongsTo('App\Aluno','id');
    }
}
