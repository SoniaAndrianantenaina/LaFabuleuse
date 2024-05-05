<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Themes extends Model {
    public $table="themes";
    public $timestamps = false;
    protected $fillable = ['id','idtypesoiree','nom'];
}
