<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReservationService extends Model {
    public $table="reservation_service";
    public $timestamps = false;
    protected $fillable = ['idreservation','idservice'];
}
