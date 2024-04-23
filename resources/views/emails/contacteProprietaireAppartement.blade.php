<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacte| Client</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            /* margin: 0;
            padding: 0; */
        }
        .container {
            /* max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px; */
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #007bff;
            text-align: center;
        }
        .message {
            margin-top: 20px;
        }
        .message p {
            margin-bottom: 10px;
        }
        .footer {
            color: #888;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Nouveau message depuis la plateforme <b>LocatHabitat</b></h1>
        <div class="message">
            <p><strong>Nom :</strong> {{ $nom }}</p>
            <p><strong>Téléphone :</strong> {{ $telephone }}</p>
            <p><strong>Adresse e-mail :</strong> <a href="mailto:{{ $email }}">{{ $email }}</a></p>
            <p><strong>Message : <pre>{{ $message }}</pre>
        </div><br>
        <p>Merci de prendre en charge cette demande.</p>
        <p class="footer">Cordialement, <br>{{ $nom }}</p>
    </div>

</body>
</html>
