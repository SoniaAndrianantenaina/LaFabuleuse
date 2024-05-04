<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        // dd("hello");

        $errorMessage = '';

        $password = $request->password;
        // dd($password);

        $user = Users::where('email', $request->email)->first();
        // dd($user);

        if ($user != null) {
            if ($password === $user->mdp) {
                session()->put('idUser', $user->id);
                return redirect()->route('dashboard');
            } else if ($password !== $user->mdp) {
                $errorMessage = 'Le mot de passe est incorrect';
            } 
            // dd($errorMessage);
            return redirect()->back()->withErrors(['erreurs' => $errorMessage]);
        }

        return back()->withErrors(['erreurs' => 'Email non existant']);
    }
}
