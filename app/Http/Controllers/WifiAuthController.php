<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class WifiAuthController extends Controller
{
    /**
     * Affiche le formulaire d'inscription WiFi
     */
    public function showRegistrationForm()
    {
        return view('wifi.register');
    }

    /**
     * Gère l'enregistrement du visiteur et l'envoi de l'email
     */
    public function register(Request $request)
    {
        // ✅ Validation des données
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:guests',
            'phone' => 'required|string|max:20',
        ]);

        // ✅ Génération d’un mot de passe aléatoire
        $plainPassword = Str::random(8);

        // ✅ Création du compte invité
        $guest = Guest::create([
            'name' => $validatedData['name'],
            'prenom' => $validatedData['prenom'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'password' => Hash::make($plainPassword),
        ]);

        // ✅ Envoi de l’e-mail
        try {
            Mail::raw("Bonjour {$guest->prenom},\n\n".
                      "Merci pour votre inscription.\n\n".
                      "Voici vos identifiants WiFi :\n".
                      "Login : {$guest->email}\n".
                      "Mot de passe : {$plainPassword}\n\n".
                      "Veuillez garder ces informations confidentielles.\n\n".
                      "Cordialement,\nL'équipe Sagemcom",
                function ($message) use ($guest) {
                    $message->to($guest->email)
                            ->subject('Vos identifiants WiFi');
                }
            );

            // ✅ Redirection avec message et email en session
            return redirect()->route('wifi.registration.success')
                ->with('success', 'Inscription réussie ! Les identifiants WiFi ont été envoyés par email.')
                ->with('guest_email', $guest->email);

        } catch (\Exception $e) {
            // ❌ En cas d’erreur d’envoi d’e-mail
            return back()->withErrors(['email' => 'Erreur lors de l’envoi de l’e-mail : ' . $e->getMessage()]);
        }
    }

    /**
     * Page de succès après inscription
     */
    public function registrationSuccess()
    {
        if (!session()->has('guest_email')) {
            return redirect()->route('wifi.register');
        }

        $guestEmail = session('guest_email');

        return view('wifi.success', compact('guestEmail'));
    }
}
