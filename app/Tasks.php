<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
     /**
     * Fillable fields
     * 
     * @var array
     */
    protected $fillable = [
        'title',
        'description'
    ];
}
