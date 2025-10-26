@extends('layouts.guest')

@section('title', 'Inscription')

@section('content')
<h2 class="text-xl font-bold mb-4">Créer un compte</h2>

<form method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Name -->
    <div class="mb-3">
        <label for="name">Nom</label>
        <input id="name" type="text" name="name" value="{{ old('name') }}"
               required autofocus class="w-full border rounded p-2">
        @error('name') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
    </div>

    <!-- Email -->
    <div class="mb-3">
        <label for="email">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}"
               required class="w-full border rounded p-2">
        @error('email') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
    </div>

    <!-- Password -->
    <div class="mb-3">
        <label for="password">Mot de passe</label>
        <input id="password" type="password" name="password"
               required class="w-full border rounded p-2">
        @error('password') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
    </div>

    <!-- Confirm Password -->
    <div class="mb-3">
        <label for="password_confirmation">Confirmer le mot de passe</label>
        <input id="password_confirmation" type="password" name="password_confirmation"
               required class="w-full border rounded p-2">
    </div>

    <div class="flex justify-between items-center">
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
            S'inscrire
        </button>
        <a href="{{ route('login') }}" class="text-blue-600 text-sm">
            Déjà inscrit ? Se connecter
        </a>
    </div>
</form>
@endsection
