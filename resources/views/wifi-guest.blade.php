<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue chez Sagemcom</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(120deg, #0066cc 0%, #003366 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .container {
            background-color: white;
            border-radius: 16px;
            box-shadow: 0 12px 30px rgba(0, 51, 102, 0.25);
            width: 100%;
            max-width: 480px;
            overflow: hidden;
        }
        
        .header {
            background: linear-gradient(to right, #0066cc, #004c99);
            color: white;
            padding: 35px 25px;
            text-align: center;
            position: relative;
        }
        
        .header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(to right, #00aaff, #0088cc);
        }
        
        .logo-container {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        
        .logo {
            width: 80px;
            height: 80px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 5px 15px rgba(0, 68, 136, 0.3);
            font-weight: bold;
            font-size: 14px;
            color: #0066cc;
            text-align: center;
        }
        
        .header h1 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 8px;
            letter-spacing: 0.5px;
        }
        
        .header p {
            font-size: 16px;
            opacity: 0.9;
            font-weight: 300;
        }
        
        .content {
            padding: 35px;
        }
        
        .welcome-text {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .welcome-text h2 {
            font-size: 22px;
            margin-bottom: 15px;
            color: #0066cc;
            font-weight: 600;
        }
        
        .welcome-text p {
            color: #666;
            line-height: 1.6;
            font-size: 16px;
        }
        
        .connection-status {
            display: flex;
            align-items: center;
            background-color: #f0f8ff;
            padding: 18px;
            border-radius: 12px;
            margin-bottom: 30px;
            border-left: 4px solid #0088cc;
        }
        
        .status-icon {
            background: linear-gradient(to bottom, #0088cc, #0066cc);
            color: white;
            width: 44px;
            height: 44px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 15px;
            flex-shrink: 0;
            font-weight: bold;
        }
        
        .status-text {
            color: #004c99;
        }
        
        .status-text strong {
            color: #0066cc;
            font-weight: 600;
        }
        
        .btn-container {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }
        
        .btn {
            padding: 16px 24px;
            border-radius: 10px;
            border: none;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 12px;
            text-decoration: none;
            text-align: center;
        }
        
        .btn-primary {
            background: linear-gradient(to right, #0088cc, #0066cc);
            color: white;
            box-shadow: 0 4px 10px rgba(0, 136, 204, 0.3);
        }
        
        .btn-primary:hover {
            background: linear-gradient(to right, #0066cc, #0055aa);
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(0, 102, 204, 0.4);
        }
        
        .btn-secondary {
            background-color: white;
            border: 2px solid #0088cc;
            color: #0088cc;
        }
        
        .btn-secondary:hover {
            background-color: rgba(0, 136, 204, 0.1);
            transform: translateY(-2px);
        }
        
        .footer {
            text-align: center;
            padding: 20px;
            color: #888;
            font-size: 14px;
            border-top: 1px solid #eaeaea;
            background-color: #f9f9f9;
        }
        
        .security-note {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 8px;
            margin-top: 8px;
            color: #0088cc;
            font-size: 13px;
        }
        
        @media (max-width: 500px) {
            .container {
                border-radius: 12px;
            }
            
            .header {
                padding: 25px 20px;
            }
            
            .content {
                padding: 25px 20px;
            }
            
            .btn {
                padding: 14px 20px;
                font-size: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo-container">
                <div class="logo">S<br>A<br>G<br>E</div>
            </div>
            <h1>Sagemcom</h1>
            <p>Connectivité haut débit sécurisée</p>
        </div>
        
        <div class="content">
            <div class="welcome-text">
                <h2>Bienvenue chez Sagemcom</h2>
                <p>Vous êtes connecté au Wi-Fi invité sécurisé.<br>Pour accéder à Internet, veuillez vous inscrire ou vous connecter.</p>
            </div>
            
            <div class="connection-status">
                <div class="status-icon">✓</div>
                <div class="status-text">
                    <p>Réseau sécurisé <strong>Sagemcom_Guest</strong></p>
                </div>
            </div>
            
            <div class="btn-container">
                <a href="{{ route('wifi.register') }}" class="btn btn-primary">
                    <!-- Remplacement de l'icône par du texte -->
                    <span>+</span>
                    S'inscrire
                </a>
                <a href="{{ route('guest.login') }}" class="btn btn-secondary">
                    <!-- Remplacement de l'icône par du texte -->
                    <span>→</span>
                    Se connecter
                </a>
            </div>
        </div>
        
        <div class="footer">
            <p>&copy; 2025 Sagemcom. Tous droits réservés.</p>
            <div class="security-note">
                <!-- Remplacement de l'icône par du texte -->
                <span>🔒</span>
                <span>Connexion sécurisée par chiffrement avancé</span>
            </div>
        </div>
    </div>
</body>
</html>