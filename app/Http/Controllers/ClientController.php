<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clients;


class ClientController extends Controller
{
    public function ajoutClient(Request $request)
    {

        Clients::create([
            'nom' => $request->name,
            'email' => $request->email,
            'mdp' => $request->password,
            'contact' => $request->contact,
            'adresse' => $request->adresse,
            'typeid' => $request->type,

        ]);

        return resirect()->route('login');
    }
}
