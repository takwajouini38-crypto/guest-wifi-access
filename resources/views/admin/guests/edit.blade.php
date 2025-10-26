@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="title">Modifier un invité</h1>

    <form action="{{ route('admin.guests.update', $guest->id) }}" method="POST" class="form-card">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Prénom</label>
            <input type="text" name="prenom" class="form-input" value="{{ old('prenom', $guest->prenom) }}">
        </div>

        <div class="form-group">
            <label>Nom</label>
            <input type="text" name="name" class="form-input" value="{{ old('name', $guest->name) }}">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-input" value="{{ old('email', $guest->email) }}">
        </div>

        <div class="form-group">
            <label>Téléphone</label>
            <input type="text" name="phone" class="form-input" value="{{ old('phone', $guest->phone) }}">
        </div>

        <div class="form-actions">
            <button type="submit" class="btn-save">💾 Mettre à jour</button>
            <a href="{{ route('admin.guests.index') }}" class="btn-cancel">✖ Annuler</a>
        </div>
    </form>
</div>

<style>
/* Container */
.container {
    max-width: 600px;
    margin: 40px auto;
    padding: 25px;
    background: #fff;
}

/* Titre */
.title {
    font-size: 22px;
    font-weight: bold;
    color: #0066cc; /* Bleu Sagemcom */
    margin-bottom: 20px;
    text-align: center;
}

/* Form Card */
.form-card {
    background: #f9f9f9;
    padding: 25px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

/* Champs */
.form-group {
    margin-bottom: 18px;
}

.form-group label {
    display: block;
    font-weight: bold;
    margin-bottom: 6px;
    color: #333;
}

.form-input {
    width: 100%;
    padding: 10px 12px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 14px;
    transition: border-color 0.3s;
}

.form-input:focus {
    border-color: #0066cc;
    outline: none;
    box-shadow: 0 0 4px rgba(0,102,204,0.3);
}

/* Boutons */
.form-actions {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}

.btn-save, .btn-cancel {
    padding: 10px 18px;
    font-size: 15px;
    border-radius: 6px;
    border: none;
    cursor: pointer;
    text-decoration: none;
    text-align: center;
}

/* Bouton sauvegarder */
.btn-save {
    background-color: #28a745;
    color: white;
}

.btn-save:hover {
    background-color: #218838;
}

/* Bouton annuler */
.btn-cancel {
    background-color: #6c757d;
    color: white;
}

.btn-cancel:hover {
    background-color: #5a6268;
}
</style>
@endsection
