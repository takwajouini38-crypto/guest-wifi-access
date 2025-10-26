@extends('layouts.guest')

@section('title', 'Confirmer le mot de passe')

@section('content')
<h2 class="text-xl font-bold mb-4">Confirmer le mot de passe</h2>

<p class="mb-4 text-gray-600">
    Veuillez confirmer votre mot de passe avant de continuer.
</p>

<form method="POST" action="{{ route('password.confirm') }}">
    @csrf

    <!-- Password -->
    <div class="mb-3">
        <label for="password">Mot de passe</label>
        <input id="password" type="password" name="password"
               required class="w-full border rounded p-2">
        @error('password') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
    </div>

    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
        Confirmer
    </button>
</form>
@endsection

