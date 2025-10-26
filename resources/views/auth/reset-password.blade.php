@extends('layouts.guest')

@section('title', 'Réinitialiser le mot de passe')

@section('content')
<h2 class="text-xl font-bold mb-4">Nouveau mot de passe</h2>

<form method="POST" action="{{ route('password.update') }}">
    @csrf

    <input type="hidden" name="token" value="{{ $request->route('token') }}">

    <!-- Email -->
    <div class="mb-3">
        <label for="email">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email', $request->email) }}"
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
        <label for="password_confirmation">Confirmer</label>
        <input id="password_confirmation" type="password" name="password_confirmation"
               required class="w-full border rounded p-2">
    </div>

    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
        Réinitialiser
    </button>
</form>
@endsection
