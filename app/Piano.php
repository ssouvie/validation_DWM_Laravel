<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Piano extends Model
{

    protected $fillable = ['name', 'brand', 'fabrication', 'description', 'price'];
}