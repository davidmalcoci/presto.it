<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presto.it Contatto</title>
</head>
<body>
    <style>
        body{
            background-color: lightcoral;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }

    </style>
    <h1>Gentile {{$contact['nome']}}, ti ringraziamo per averci contattato. </h1>
    <p class="lead">Abbiamo ricevuto la tua richiesta di revisore con email:</p>
    <p>{{$contact['mail']}}</p>
   
    <p>Sarai contattato da un nostro amministratore il prima possible per la validazione.</p>
    
</body>
</html>