<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public $table = "reservation";
    public $timestamps = false;
    protected $fillable = ['id', 'idclient', 'dateprevue', 'idtypesoiree', 'idtheme', 'nbparticipants', 'idlieux', 'localisation', 'budget', 'etat'];
}
