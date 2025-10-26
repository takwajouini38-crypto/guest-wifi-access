@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="title">Liste des invités</h1>

    @if(session('success'))
        <div class="alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-container">
        <table class="styled-table">
            <thead>
                <tr>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($guests as $guest)
                    <tr>
                        <td>{{ $guest->prenom }}</td>
                        <td>{{ $guest->name }}</td>
                        <td>{{ $guest->email }}</td>
                        <td>{{ $guest->phone }}</td>
                        <td class="actions">
                            <a href="{{ route('admin.guests.edit', $guest->id) }}" class="btn-edit">Modifier</a>
                            <form action="{{ route('admin.guests.destroy', $guest->id) }}" 
                                  method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Supprimer cet invité ?')" class="btn-delete">
                                    Supprimer
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                @if($guests->isEmpty())
                    <tr>
                        <td colspan="5" class="no-data">Aucun invité trouvé</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>

<style>
/* Container */
.container {
    max-width: 1000px;
    margin: 40px auto;
    padding: 20px;
    background: #fff;
}

/* Titre */
.title {
    font-size: 24px;
    font-weight: bold;
    color: #0066cc; /* Bleu Sagemcom */
    margin-bottom: 20px;
    text-align: center;
}

/* Alert */
.alert-success {
    background: #e6ffed;
    color: #2d7a46;
    border: 1px solid #c3e6cb;
    padding: 10px;
    border-radius: 6px;
    margin-bottom: 15px;
    text-align: center;
}

/* Table */
.table-container {
    overflow-x: auto;
}

.styled-table {
    width: 100%;
    border-collapse: collapse;
    font-size: 15px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

.styled-table thead tr {
    background-color: #0066cc;
    color: #ffffff;
    text-align: left;
}

.styled-table th,
.styled-table td {
    padding: 12px 15px;
    border: 1px solid #ddd;
}

.styled-table tbody tr {
    background-color: #f9f9f9;
    transition: background 0.3s;
}

.styled-table tbody tr:hover {
    background-color: #f1f7ff;
}

/* Boutons */
.actions {
    text-align: center;
}

.btn-edit, .btn-delete {
    padding: 6px 12px;
    font-size: 14px;
    border-radius: 5px;
    text-decoration: none;
    border: none;
    cursor: pointer;
}

.btn-edit {
    background-color: #007bff;
    color: white;
    margin-right: 6px;
}

.btn-edit:hover {
    background-color: #0056b3;
}

.btn-delete {
    background-color: #dc3545;
    color: white;
}

.btn-delete:hover {
    background-color: #a71d2a;
}

/* Aucun invité */
.no-data {
    text-align: center;
    padding: 15px;
    color: #666;
    font-style: italic;
}
</style>
@endsection
