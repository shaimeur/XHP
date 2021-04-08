<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    
    <p>Je sais comment tu t'appelles, hé hé. Tu t'appelles <?php echo $_POST['prenom'].' '. $_POST['nom']; ?> !</p>
    <p>Si tu veux changer de prénom, <a href="index.php">clique ici</a> pour revenir à la page index.php.</p>

</body>
</html>