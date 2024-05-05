<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model {
    public $table="services";
    public $timestamps = false;
    protected $fillable = ['id','nom','description','image'];
}
