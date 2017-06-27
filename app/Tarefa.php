<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{	
	/**
     * Fillable fields
     * 
     * @var array
     */
    protected $fillable = [
        'titulo',
        'descricao'
    ];
}
