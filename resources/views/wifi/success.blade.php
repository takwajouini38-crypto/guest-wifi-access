<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription WiFi réussie</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #0066cc 0%, #004d99 100%);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }
        
        .success-container {
            width: 100%;
            max-width: 500px;
            text-align: center;
        }
        
        .success-box {
            background: white;
            color: #333;
            padding: 40px 30px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            margin-bottom: 25px;
        }
        
        .success-icon {
            width: 80px;
            height: 80px;
            background: #4cd964;
            border-radius: 50%;
            margin: 0 auto 25px;
            position: relative;
            animation: scaleIn 0.5s ease-out;
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
            color: #0066cc;
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 15px;
        }
        
        .success-message {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 10px;
        }
        
        .user-name {
            color: #0066cc;
            font-weight: 600;
        }
        
        .user-email {
            color: #004d99;
            font-weight: 500;
        }
        
        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 30px;
        }
        
        .btn {
            padding: 14px 25px;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }
        
        .btn-primary {
            background: linear-gradient(to right, #0066cc, #004d99);
            color: white;
            border: none;
            box-shadow: 0 4px 10px rgba(0, 102, 204, 0.25);
        }
        
        .btn-primary:hover {
            background: linear-gradient(to right, #0052a3, #003d7a);
            box-shadow: 0 6px 15px rgba(0, 102, 204, 0.35);
        }
        
        .btn-secondary {
            background: transparent;
            color: #0066cc;
            border: 2px solid #0066cc;
        }
        
        .btn-secondary:hover {
            background: rgba(0, 102, 204, 0.1);
        }
        
        .footer {
            opacity: 0.8;
            font-size: 14px;
        }
        
        @keyframes scaleIn {
            from {
                transform: scale(0);
                opacity: 0;
            }
            to {
                transform: scale(1);
                opacity: 1;
            }
        }
        
        @media (max-width: 480px) {
            .success-box {
                padding: 30px 20px;
            }
            
            .success-title {
                font-size: 24px;
            }
            
            .success-message {
                font-size: 16px;
            }
            
            .action-buttons {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="success-container">
        <div class="success-box">
            <div class="success-icon"></div>
            <h1 class="success-title">Inscription WiFi réussie !</h1>

            @if (session('success'))
                <p class="success-message">{{ session('success') }}</p>
            @endif

            <p class="success-message">
                Merci <span class="user-name">{{ session('guest_name') ?? 'Cher utilisateur' }}</span> pour votre inscription.
            </p>
            <p class="success-message">
                Un email de confirmation a été envoyé à 
                <span class="user-email">{{ $guestEmail }}</span>.
            </p>

           
        </div>

        <div class="footer">
            <p>© 2025 - Service WiFi Invité Sagemcom. Tous droits réservés.</p>
        </div>
    </div>
</body>
</html>
