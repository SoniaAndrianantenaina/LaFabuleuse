<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lieux extends Model {
    public $table="lieux";
    public $timestamps = false;
    protected $fillable = ['id','nom'];
}
