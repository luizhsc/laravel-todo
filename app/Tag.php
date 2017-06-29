<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    	/**
     * Fillable fields
     * 
     * @var array
     */
    protected $fillable = [
        'nome',        
    ];
}
