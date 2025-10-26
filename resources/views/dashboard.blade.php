@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="dashboard-container">
    <div class="dashboard-card">
        <h1 class="dashboard-title">📊 Bienvenue sur le Dashboard</h1>
        <p class="dashboard-text"> Vous êtes connecté avec succès.</p>

        <!-- Carte Nombre d'invités -->
        <div class="stats-card">
            <h2 class="stats-title">Nombre total d'invités</h2>
            <p class="stats-number">{{ $totalGuests }}</p>
        </div>

        <div class="dashboard-actions">
            <a href="{{ route('admin.guests.index') }}" class="btn-dashboard">👥 Gérer les invités</a>
        </div>
    </div>
</div>

<style>
/* Conteneur général */
.dashboard-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 75vh;
    background: #f0f4f8;
}

/* Carte Dashboard */
.dashboard-card {
    background: #ffffff;
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0 6px 14px rgba(0,0,0,0.1);
    text-align: center;
    max-width: 600px;
    width: 100%;
}

/* Titre */
.dashboard-title {
    font-size: 26px;
    font-weight: bold;
    color: #0066cc;
    margin-bottom: 15px;
}

/* Texte */
.dashboard-text {
    font-size: 16px;
    color: #444;
    margin-bottom: 25px;
}

/* Carte Statistiques */
.stats-card {
    background: #eaf3ff;
    border: 2px solid #0066cc;
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 25px;
}

.stats-title {
    font-size: 18px;
    font-weight: bold;
    color: #0066cc;
    margin-bottom: 10px;
}

.stats-number {
    font-size: 32px;
    font-weight: bold;
    color: #333;
}

/* Actions */
.dashboard-actions {
    display: flex;
    justify-content: center;
}

/* Bouton principal */
.btn-dashboard {
    display: inline-block;
    padding: 12px 22px;
    font-size: 15px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: bold;
    background-color: #0066cc;
    color: white;
    transition: 0.3s;
}

.btn-dashboard:hover {
    background-color: #005bb5;
}
</style>
@endsection
