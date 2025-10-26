<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Invité - Accès WiFi</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #0066cc 0%, #004d99 50%, #00264d 100%);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
            position: relative;
            overflow: hidden;
        }
        
        body::before {
            content: "";
            position: absolute;
            width: 200%;
            height: 200%;
            top: -50%;
            left: -50%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            transform: rotate(30deg);
            z-index: 0;
        }
        
        .container {
            width: 100%;
            max-width: 440px;
            z-index: 1;
        }
        
        /* Styles pour la page de connexion */
        #loginPage {
            display: block;
        }
        
        #successPage {
            display: none;
        }
        
        .login-header, .success-header {
            text-align: center;
            margin-bottom: 30px;
            animation: fadeIn 1s ease-out;
        }
        
        .login-header h1, .success-header h1 {
            font-weight: 700;
            font-size: 32px;
            margin-bottom: 10px;
            letter-spacing: 0.5px;
            text-shadow: 0 2px 4px rgba(0,0,0,0.2);
        }
        
        .login-header p, .success-header p {
            opacity: 0.9;
            font-size: 16px;
            max-width: 300px;
            margin: 0 auto;
            line-height: 1.5;
        }
        
        .login-box, .success-box {
            background: rgba(255, 255, 255, 0.95);
            color: #333;
            padding: 40px 35px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            backdrop-filter: blur(10px);
            animation: slideUp 0.8s ease-out;
        }
        
        .login-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);
        }
        
        .welcome-message {
            text-align: center;
            margin-bottom: 30px;
            color: #0066cc;
            font-size: 18px;
            font-weight: 500;
        }
        
        .form-group {
            margin-bottom: 25px;
            position: relative;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 10px;
            font-weight: 600;
            color: #0066cc;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .input-with-icon {
            position: relative;
        }
        
        .input-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            width: 22px;
            height: 22px;
            background-color: #0066cc;
            border-radius: 50%;
            z-index: 2;
        }
        
        .input-icon::before {
            content: "";
            position: absolute;
            width: 8px;
            height: 2px;
            background: white;
            top: 10px;
            left: 7px;
        }
        
        .input-icon.password::before {
            width: 10px;
            height: 10px;
            border: 2px solid white;
            border-radius: 50%;
            background: transparent;
            top: 4px;
            left: 4px;
        }
        
        .input-icon.password::after {
            content: "";
            position: absolute;
            width: 6px;
            height: 2px;
            background: white;
            transform: rotate(45deg);
            top: 14px;
            left: 10px;
        }
        
        .form-group input {
            width: 100%;
            padding: 16px 16px 16px 50px;
            border: 2px solid #e1e8ed;
            border-radius: 12px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: #f7f9fc;
            position: relative;
            z-index: 1;
        }
        
        .form-group input:focus {
            border-color: #0066cc;
            box-shadow: 0 0 0 3px rgba(0, 102, 204, 0.3);
            outline: none;
            background: white;
        }
        
        .login-button {
            background: linear-gradient(to right, #0066cc, #004d99);
            color: white;
            border: none;
            width: 100%;
            padding: 18px;
            border-radius: 12px;
            font-size: 17px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 102, 204, 0.4);
            position: relative;
            overflow: hidden;
        }
        
        .login-button::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: 0.5s;
        }
        
        .login-button:hover {
            background: linear-gradient(to right, #0052a3, #003d7a);
            box-shadow: 0 8px 20px rgba(0, 102, 204, 0.5);
            transform: translateY(-2px);
        }
        
        .login-button:hover::before {
            left: 100%;
        }
        
        .login-button:active {
            transform: translateY(0);
        }
        
        /* Styles pour la page de succès */
        .success-icon {
            width: 80px;
            height: 80px;
            background: #4cd964;
            border-radius: 50%;
            margin: 0 auto 25px;
            position: relative;
            animation: bounce 1s ease-out;
        }
        
        .success-icon::before {
            content: "";
            position: absolute;
            width: 30px;
            height: 15px;
            border: 5px solid white;
            border-top: none;
            border-right: none;
            transform: rotate(-45deg);
            top: 30px;
            left: 22px;
        }
        
        .success-title {
            color: #27ae60;
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 15px;
            text-align: center;
        }
        
        .success-message {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 10px;
            text-align: center;
        }
        
        .user-name {
            color: #0066cc;
            font-weight: 600;
        }
        
        .user-email {
            color: #004d99;
            font-weight: 500;
        }
        
        .action-button {
            background: linear-gradient(to right, #0066cc, #004d99);
            color: white;
            border: none;
            padding: 16px 30px;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 102, 204, 0.4);
            margin-top: 20px;
            display: block;
            text-decoration: none;
            width: 100%;
            text-align: center;
        }
        
        .action-button:hover {
            background: linear-gradient(to right, #0052a3, #003d7a);
            box-shadow: 0 8px 20px rgba(0, 102, 204, 0.5);
            transform: translateY(-2px);
        }
        
        .features {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
            text-align: center;
        }
        
        .feature {
            flex: 1;
            padding: 15px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            margin: 0 8px;
            backdrop-filter: blur(5px);
        }
        
        .feature h3 {
            font-size: 15px;
            margin-bottom: 5px;
            font-weight: 600;
        }
        
        .feature p {
            font-size: 13px;
            opacity: 0.9;
        }
        
        .footer {
            opacity: 0.8;
            font-size: 14px;
            text-align: center;
            margin-top: 25px;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        @keyframes slideUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        @keyframes bounce {
            0% { transform: scale(0); }
            50% { transform: scale(1.2); }
            100% { transform: scale(1); }
        }
        
        @media (max-width: 480px) {
            .login-box, .success-box {
                padding: 30px 25px;
            }
            
            .login-header h1, .success-header h1 {
                font-size: 28px;
            }
            
            .features {
                flex-direction: column;
            }
            
            .feature {
                margin: 8px 0;
            }
        }
    </style>
</head>
<body>
    <!-- Page de connexion -->
    <div class="container" id="loginPage">
        <div class="login-header">
            <h1>Connexion Invité</h1>
            <p>Accédez à notre réseau WiFi haute vitesse</p>
        </div>
        
        <div class="login-box">
            <div class="welcome-message">
                Veuillez vous connecter pour accéder au WiFi
            </div>
            
            <form id="loginForm">
                <div class="form-group">
                    <label for="login">Identifiant</label>
                    <div class="input-with-icon">
                        <div class="input-icon"></div>
                        <input type="text" name="login" id="login" required placeholder="Votre identifiant">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <div class="input-with-icon">
                        <div class="input-icon password"></div>
                        <input type="password" name="password" id="password" required placeholder="Votre mot de passe">
                    </div>
                </div>
                
                <button type="submit" class="login-button">Se connecter</button>
            </form>
        </div>
        
        <div class="features">
            <div class="feature">
                <h3>⚡ Haut débit</h3>
                <p>Connectez-vous à vitesse maximale</p>
            </div>
            <div class="feature">
                <h3>🔒 Sécurisé</h3>
                <p>Votre connexion est cryptée</p>
            </div>
            <div class="feature">
                <h3>🌍 Disponible</h3>
                <p>Accédez partout dans l'établissement</p>
            </div>
        </div>
        
        <div class="footer">
            <p>© 2025 - Service WiFi Invité</p>
        </div>
    </div>
    
    <!-- Page de succès (cachée initialement) -->
    <div class="container" id="successPage">
        <div class="success-header">
            <h1>Connexion Réussie</h1>
            <p>Vous êtes maintenant connecté au WiFi</p>
        </div>
        
        <div class="success-box">
            <div class="success-icon"></div>
            <h1 class="success-title">Connexion Réussie!</h1>
            <p class="success-message">
                Merci <span class="user-name" id="username">Invité</span> pour votre inscription.
            </p>
            <p class="success-message">
                Vous êtes maintenant connecté à notre réseau WiFi.
            </p>
            
            <button id="backToLogin" class="action-button">Retour à la connexion</button>
        </div>
        
        <div class="features">
            <div class="feature">
                <h3>⚡ Connexion active</h3>
                <p>Votre accès WiFi est maintenant activé</p>
            </div>
            <div class="feature">
                <h3>🔒 Sécurisé</h3>
                <p>Votre navigation est cryptée</p>
            </div>
            <div class="feature">
                <h3>🌍 Bon surf</h3>
                <p>Profitez de votre connexion Internet</p>
            </div>
        </div>
        
        <div class="footer">
            <p>© 2023 - Service WiFi Invité. Profitez de votre connexion!</p>
        </div>
    </div>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Récupérer les valeurs du formulaire
            const login = document.getElementById('login').value;
            const password = document.getElementById('password').value;
            
            // Simuler une connexion réussie
            // En production, vous enverriez ces données au serveur
            
            // Afficher le nom d'utilisateur sur la page de succès
            document.getElementById('username').textContent = login || 'Invité';
            
            // Masquer la page de connexion et afficher la page de succès
            document.getElementById('loginPage').style.display = 'none';
            document.getElementById('successPage').style.display = 'block';
        });
        
        // Gestion du bouton de retour
        document.getElementById('backToLogin').addEventListener('click', function() {
            // Revenir à la page de connexion
            document.getElementById('successPage').style.display = 'none';
            document.getElementById('loginPage').style.display = 'block';
            
            // Réinitialiser le formulaire
            document.getElementById('loginForm').reset();
        });
    </script>
</body>
</html>