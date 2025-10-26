@extends('layouts.guest')

@section('title', 'Mot de passe oublié')

@section('content')
<h2 class="text-xl font-bold mb-4">Réinitialiser le mot de passe</h2>

@if (session('status'))
    <div class="mb-4 text-green-600">{{ session('status') }}</div>
@endif

<form method="POST" action="{{ route('password.email') }}">
    @csrf

    <!-- Email -->
    <div class="mb-3">
        <label for="email">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}"
               required class="w-full border rounded p-2">
        @error('email') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
    </div>

    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
        Envoyer le lien
    </button>
</form>
@endsection
