<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServicesDetails extends Model
{
    public $table = "servicesdetails";
    public $timestamps = false;
    protected $fillable = ['id', 'idservices', 'nom', 'prix', 'details', 'photo'];
}
