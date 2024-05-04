<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admins;
use App\Models\Clients;


class LoginController extends Controller
{
    public function index(Request $request)
    {
        // dd("hello");

        $errorMessage = '';

        $password = $request->password;
        // dd($password);

        $admin = Admins::where('mail', $request->email)->first();

        $client = Clients::where('email', $request->email)->first();
        // dd($client);

        if ($admin != null) { //admin
            if ($password === $admin->mdp) {
                session()->put('idAdmin', $admin->id);
                return redirect()->route('accueil');
            } else if ($password !== $admin->mdp) {
                $errorMessage = 'Le mot de passe est incorrect';
            } 
            // dd($errorMessage);
            return redirect()->back()->withErrors(['erreurs' => $errorMessage]);
        }

        else if ($client != null) { //si client
            if ($mdp === $client->mdp) {
                session()->put('idClient', $client->id);
                return redirect()->route('accueil_client');
            } else if (!$mdp) {
                $errorMessage = 'Le mot de passe est incorrect';
            }
            return redirect()->back()->withErrors(['erreurs' => $errorMessage]);
        }

        return back()->withErrors(['erreurs' => 'Email non existant']);
    }
}
