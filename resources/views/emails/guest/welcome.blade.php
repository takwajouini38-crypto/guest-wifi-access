@component('mail::message')
# Bonjour {{ $guest->prenom }} {{ $guest->name }},

Bienvenue sur le service **Wifi GuestAccess de Sagemcom** 🎉

Voici vos identifiants de connexion :

- **Login (Email) :** {{ $guest->email }}
- **Mot de passe :** {{ $plainPassword }}

Merci de conserver ces informations en sécurité.  
À bientôt,  
L’équipe IT Sagemcom

@endcomponent

