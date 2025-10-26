@extends('layouts.guest')

@section('title', 'Connexion')

@section('content')
    <h2 class="text-xl font-bold mb-4">Connexion</h2>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email -->
        <div class="mb-3">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}"
                   required autofocus
                   class="w-full border rounded p-2">
            @error('email')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label for="password">Mot de passe</label>
            <input id="password" type="password" name="password" required
                   class="w-full border rounded p-2">
            @error('password')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
        </div>

        <!-- Remember me -->
        <div class="mb-3 flex items-center">
            <input type="checkbox" id="remember" name="remember" class="mr-2">
            <label for="remember">Se souvenir de moi</label>
        </div>

        <div class="flex justify-between items-center">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
                Se connecter
            </button>
            <a href="{{ route('password.request') }}" class="text-blue-600 text-sm">
                Mot de passe oublié ?
            </a>
        </div>
    </form>
@endsection
