<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

// On s'amuse à créer quelques variables de session dans $_SESSION
$_SESSION['prenom'] = 'nourdine';
$_SESSION['nom'] = 'brazil';
$_SESSION['age'] = 10;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre de ma page</title>
    </head>
    <body>
    <p>
        Salut <?php echo $_SESSION['prenom']; ?> !<br />
        Tu es à l'accueil de mon site (index.php). Tu veux aller sur une autre page ?
    </p>
    <p>
        <a href="mapage.php">Lien vers mapage</a><br />
        <a href="monscript.php">Lien vers monscript</a><br />
        <a href="information.php">Lien vers informations</a>
    </p>
    </body>
</html>
<?php
// session_destroy();

?>