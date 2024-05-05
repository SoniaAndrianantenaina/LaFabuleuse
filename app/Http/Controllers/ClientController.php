<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clients;
use Illuminate\Support\Facades\DB;


class ClientController extends Controller
{
    public function ajoutClient(Request $request)
    {

        DB::table('clients')->insert([
            'idtype' => $request->type,
            'nom' => $request->nom,
            'email' => $request->email,
            'contact' => $request->contact,
            'adresse' => $request->adresse,
            'mdp' => $request->mdp,
        ]);

        return redirect()->route('login');
    }
}
