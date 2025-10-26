<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Application WiFi')</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6; /* gris clair */
            color: #1f2937; /* gris foncé */
            margin: 0;
            padding: 0;
        }

        /* Navbar */
        nav {
            background-color: #0066cc; /* bleu Sagemcom */
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        nav form {
            display: inline;
        }

        nav button {
            background: none;
            border: none;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        nav button:hover {
            text-decoration: underline;
        }

        /* Contenu principal */
        main {
            padding: 25px;
        }
    </style>
</head>
<body>

    <!-- Barre de navigation -->
    <nav>
        <div>
            <a href="{{ route('dashboard') }}">Dashboard</a>
            <a href="{{ route('admin.guests.index') }}">Invités</a>
        </div>
        <div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Déconnexion</button>
            </form>
        </div>
    </nav>

    <!-- Contenu -->
    <main>
        @yield('content')
    </main>

</body>
</html>
