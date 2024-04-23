<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification d'activation de compte</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            
        }

        .container {
            
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        p {
            color: #666;
            font-size: 16px;
            margin-bottom: 20px;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Notification d'activation de compte</h1>
        <p>Bonjour <b>{{ $user->name }}</b>,</p>

        <p>Votre compte a été réactivé par l'administrateur.</p>
        <p>Vous pouvez maintenant vous connecter à votre compte et accéder à toutes ses fonctionnalités.</p>

        <p>Si vous avez des questions ou des préoccupations, n'hésitez pas à nous contacter à l'adresse e-mail <a href="mailto:ariexpertize@gmail.com">ariexpertize@gmail.com</a> <br> ou par WhatsApp/Appel au <a href="tel:+22940735335">+229 40 73 53 35</a>.</p>

        <p>Merci et à bientôt sur notre plateforme !</p>

        <p>Cordialement,<br>L'équipe de support</p>
    </div>
</body>
</html>
