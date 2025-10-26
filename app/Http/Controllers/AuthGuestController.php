<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthGuestController extends Controller
{
    // Affiche le formulaire de login
    public function showLoginForm()
    {
        return view('guests.login');
    }

    // Vérifie les informations de connexion
    public function login(Request $request)
    {
        $request->validate([
            'login' => 'required|string',
            'password' => 'required|string',
        ]);

        $guest = Guest::where('email', $request->login)->first();

        if ($guest && Hash::check($request->password, $guest->password)) {
            // ✅ Connexion réussie
            return redirect()->route('dashboard')->with('success', 'Bienvenue ' . $guest->name);
        }

        // ❌ Identifiants invalides
        return back()->withErrors([
            'login' => 'Identifiants incorrects.',
        ]);
    }
}

