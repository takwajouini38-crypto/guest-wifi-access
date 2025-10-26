@extends('layouts.app')

@section('title', 'Profil')

@section('content')
<div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow">
    <h2 class="text-xl font-bold mb-4">Modifier mon profil</h2>

    <form method="POST" action="{{ route('profile.update') }}">
        @csrf
        @method('PATCH')

        <!-- Name -->
        <div class="mb-3">
            <label for="name">Nom</label>
            <input id="name" type="text" name="name" value="{{ old('name', auth()->user()->name) }}"
                   required class="w-full border rounded p-2">
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email', auth()->user()->email) }}"
                   required class="w-full border rounded p-2">
        </div>

        <div class="flex justify-between items-center">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
                Sauvegarder
            </button>
            <form method="POST" action="{{ route('profile.destroy') }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded">
                    Supprimer mon compte
                </button>
            </form>
        </div>
    </form>
</div>
@endsection
