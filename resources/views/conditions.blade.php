<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditions d'utilisation</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<style>
    /* ====== Style global ====== */
body {
    font-family: "Segoe UI", Arial, sans-serif;
    background: linear-gradient(135deg, #0056b3, #0077e6);
    color: #333;
    margin: 0;
    padding: 0;
    line-height: 1.6;
}

/* ====== Conteneur principal ====== */
.container {
    max-width: 850px;
    margin: 60px auto;
    background: #fff;
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
    animation: fadeIn 0.6s ease-in-out;
}

/* ====== Titre principal ====== */
h1 {
    color: #0056b3;
    font-size: 2.2rem;
    text-align: center;
    margin-bottom: 25px;
    letter-spacing: 1px;
}

/* ====== Paragraphe ====== */
p {
    font-size: 1.1rem;
    text-align: justify;
    margin-bottom: 20px;
    color: #444;
}

/* ====== Liste des conditions ====== */
ul {
    margin: 20px 0;
    padding-left: 25px;
}

li {
    margin-bottom: 12px;
    font-size: 1rem;
    position: relative;
    padding-left: 10px;
}

/* Ajout d’une petite puce stylée */
li::before {
    content: "✔";
    color: #0077e6;
    font-weight: bold;
    margin-right: 10px;
}

/* ====== Bouton ====== */
.btn {
    display: inline-block;
    background: #0077e6;
    color: #fff;
    text-decoration: none;
    padding: 12px 28px;
    border-radius: 8px;
    font-weight: bold;
    text-align: center;
    transition: all 0.3s ease;
    margin-top: 20px;
}

.btn:hover {
    background: #0056b3;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 86, 179, 0.4);
}

/* ====== Animation ====== */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(15px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

</style>
<body>
    <div class="container">
        <h1>Conditions d’utilisation</h1>
        <p>Bienvenue sur notre application Guest WiFi Access. En accédant au service, vous  devez acceptez les conditions suivantes :</p>
        
        <ul>
            <li>Le réseau Wi-Fi invité est réservé à un usage professionnel et temporaire.</li>
            <li>Il est interdit de partager vos identifiants de connexion avec d’autres personnes.</li>
            <li>Les activités illégales ou contraires à la politique de sécurité de l’entreprise sont strictement interdites.</li>
            <li>L’entreprise se réserve le droit de limiter ou suspendre l’accès en cas d’abus.</li>
        </ul>

        <p>En utilisant ce service, vous reconnaissez avoir lu et accepté ces conditions.</p>

        <a href="{{ url()->previous() }}" class="btn">Retour</a>
    </div>
</body>
</html>
