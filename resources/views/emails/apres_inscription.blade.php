<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue sur notre plateforme !</title>
    <style>
        body {
            /* font-family: Arial, sans-serif; */
            /* margin: 0;
            padding: 0; */
            background-color: #f4f4f4;
        }
        .container {
            /* max-width: 600px;
            margin: 20px auto;
            padding: 20px; */
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        p {
            color: #666;
            line-height: 1.6;
        }
        .highlight {
            color: #007bff;
            font-weight: bold;
        }
        .contact-info {
            margin-top: 20px;
            padding: 10px;
            background-color: #f9f9f9;
            border-radius: 5px;
        }
        .contact-info p {
            margin: 0;
        }
        .contact-info a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bienvenue sur notre plateforme !</h1>
        <p>Bonjour <span class="highlight"> {{ $user->name }}</span>,</p>
        <p>Félicitations ! Vous êtes désormais membre de notre communauté.</p>
        <p>Vous pouvez maintenant profiter pleinement des fonctionnalités de notre plateforme :</p>
        <ul>
            <li>Publier des biens immobiliers (appartements, bureaux)</li>
            <li>Publier des véhicules</li>
        </ul>
        <p>Si vous avez des questions, des suggestions ou rencontrez des difficultés, n'hésitez pas à nous contacter :</p>
        <div class="contact-info">
            <p>Email : <a href="mailto:ariexpertize@gmail.com">ariexpertize@gmail.com</a></p>
            <p>Téléphone/WhatsApp : <a href="tel:+22940735335">+229 40735335</a></p>
        </div>
        <p>Encore une fois, bienvenue à bord ! Nous sommes impatients de vous accompagner dans votre parcours sur notre plateforme.</p>
        <p>Cordialement,<br>L'équipe de LocatHabitat</p>
    </div>
</body>
</html>
