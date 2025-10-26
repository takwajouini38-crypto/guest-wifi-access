<?php
namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    // Liste des invités (back office)
    public function index()
    {
        $guests = Guest::all();
        return view('admin.guests.index', compact('guests'));
    }

    // Formulaire d'édition
    public function edit(Guest $guest)
    {
        return view('admin.guests.edit', compact('guest'));
    }

    // Mise à jour des infos
    public function update(Request $request, Guest $guest)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:guests,email,' . $guest->id,
            'phone' => 'nullable|string|max:20'
        ]);

        $guest->update($request->all());

        return redirect()->route('admin.guests.index')->with('success', 'Informations mises à jour.');
    }

    // Supprimer un invité
    public function destroy(Guest $guest)
    {
        $guest->delete();
        return redirect()->route('admin.guests.index')->with('success', 'Invité supprimé.');
    }
}
