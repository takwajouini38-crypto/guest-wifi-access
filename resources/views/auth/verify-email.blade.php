@extends('layouts.guest')

@section('title', 'Vérifier l’email')

@section('content')
<h2 class="text-xl font-bold mb-4">Vérification de l’email</h2>

<p class="mb-4 text-gray-600">
    Merci de vous être inscrit ! Avant de commencer, veuillez vérifier votre adresse e-mail en cliquant sur le lien
    que nous venons de vous envoyer. Si vous n’avez pas reçu l’email, nous vous en renverrons un autre.
</p>

@if (session('status') == 'verification-link-sent')
    <div class="mb-4 text-green-600">
        Un nouveau lien de vérification a été envoyé à votre adresse e-mail.
    </div>
@endif

<form method="POST" action="{{ route('verification.send') }}" class="flex justify-between">
    @csrf
    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
        Renvoyer l’email
    </button>
</form>
@endsection
