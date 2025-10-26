<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sagemcom Tunisie - Wifi GuestAccess</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image: url('/images/sagemcom-bg.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .wifi-container {
            background-color: rgba(255, 255, 255, 0.85); /* Fond blanc légèrement transparent */
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            width: 90%;
            max-width: 500px;
            padding: 30px;
            backdrop-filter: blur(2px); /* Léger flou pour améliorer la lisibilité */
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
        }

        .header h1 {
            color: #0066cc;
            font-size: 24px;
            margin: 0 0 5px 0;
            font-weight: bold;
            text-shadow: 0 1px 2px rgba(0,0,0,0.1);
        }

        .header h2 {
            color: #333;
            font-size: 20px;
            margin: 5px 0;
            text-shadow: 0 1px 1px rgba(0,0,0,0.1);
        }

        .header p {
            color: #0066cc;
            font-weight: bold;
            margin: 10px 0 0 0;
            font-size: 18px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #0066cc;
            font-weight: bold;
            font-size: 14px;
        }

        .form-group input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            box-sizing: border-box;
            background-color: rgba(255,255,255,0.7);
        }

        .form-group small {
            display: block;
            color: #555;
            font-size: 12px;
            margin-top: 5px;
            font-style: italic;
        }

        .submit-btn {
            background-color: #0066cc;
            color: white;
            border: none;
            padding: 14px;
            width: 100%;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
            transition: all 0.3s;
        }

        .submit-btn:hover {
            background-color: #004d99;
        }

        .terms {
            font-size: 12px;
            color: #555;
            text-align: center;
            margin-top: 25px;
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            max-height: 80px;
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.2));
        }
    </style>
</head>
<body>
    <div class="wifi-container">
        <div class="logo">
            <img src="/images/sagemcom_logo.jpg" alt="Sagemcom Logo">
        </div>
        
        <div class="header">
            <h1>Sagemcom Tunisie site EZZAHRA</h1>
            <h2>Bienvenue chez Sagemcom</h2>
            <p>Wifi GuestAccess</p>
        </div>

        <form method="POST" action="{{ route('wifi.register.submit') }}">
            @csrf
            
            <div class="form-group">
                <label for="name">NomGuest</label>
                <input type="text" id="name" name="name" required>
                <small>Votre Nom</small>
            </div>
            
            <div class="form-group">
                <label for="prenom">PrenomGuest</label>
                <input type="text" id="prenom" name="prenom" required>
                <small>Votre Prenom</small>
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                <small>mail</small>
            </div>
            
            <div class="form-group">
                <label for="phone">Telephone</label>
                <input type="tel" id="phone" name="phone" required>
                <small>Votre Numero Tel svp II</small>
            </div>
            
            <button type="submit" class="submit-btn">Envoyer</button>
            
           <div class="terms">
        <a href="{{ route('conditions') }}" target="_blank">  En vous inscrivant, vous acceptez les conditions d'utilisation</a>.
           </div>
        </form>
    </div>
</body>
</html>