<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeSoiree extends Model {
    public $table="typesoiree";
    public $timestamps = false;
    protected $fillable = ['id','nom'];
}
