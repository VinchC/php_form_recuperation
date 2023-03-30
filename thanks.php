<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merci</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header>
        <h1>Nous traitons votre demande dans les plus bref délais.</h1>
    </header>

    <main>
        <p>
            Merci <?php echo htmlentities(($_POST["first_name"])); ?> <?php echo htmlentities(($_POST["last_name"])); ?> de nous avoir contacté à propos de <?php echo htmlentities(($_POST["mail_topic"])); ?>.
        </p>
        <p>
            Un de nos conseillers vous contactera soit à l’adresse <?php echo htmlentities(($_POST["user_email"])); ?> ou par téléphone au <?php echo htmlentities(($_POST["user_phone"])); ?> dans les plus brefs délais pour traiter votre demande :
        </p>
        <p>
            <?php echo htmlentities(($_POST["message"])); ?>.
        </p>
    </main>
</body>

</html>