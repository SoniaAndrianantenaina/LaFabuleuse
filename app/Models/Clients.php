<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TypeClients;

class Clients extends Model
{
    use HasFactory;

    protected $table = 'clients';

    public $timestamps = false;

    protected $fillable = ['nom', 'email', 'contact', 'adresse', 'mdp', 'typeid'];

    public function typeClients() : BelongsTo
    {
        return $this->belongsTo(TypeClients::class, 'typeid');
    } 
}
