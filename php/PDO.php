<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO</title>
</head>
<body>
    <form action="PDO.php" method="post">
            <input type="text" name ='possesseur'>
            <input type="number" name ='prix_max'>
            <input type="submit" >
        </p>
    <?php
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=snip;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));  
        }
        catch(Exception $e)
        {
                die('Erreur : '.$e->getMessage());
        }
        
        $req = $bdd->prepare('SELECT nom, prix FROM jeux_video WHERE possesseur = :possesseur AND prix <= :prixmax');
        $req->bindParam(":possesseur",$_POST['possesseur'],PDO::PARAM_STR);
        $req->bindParam(":prixmax",$_POST['prix_max'],PDO::PARAM_STR);
        $req->execute();
        
        echo '<ul>';
        while ($donnees = $req->fetch())
        {
            echo '<li>' . $donnees['nom'] . ' (' . $donnees['prix'] . ' EUR)</li>';
        }
        echo '</ul>';
        
        $req->closeCursor();
    ?>
</body>
</html>



























<?php


    // try 
    // {
    //     $cnx = new PDO('mysql:host=localhost;dbname=snip;','root','');
    // }
    // catch (Exception $e)
    // {
    //     die('Erreur:'.$e->getMessage());
    // }


    // $req = $cnx->prepare("SELECT nom,prix FROM jeux_video WHERE possesseur =? AND prix <= ? ORDER BY prix ");

    // $req->execute(array($_GET['possesseur'], $_GET['prix_max']));
    // //  print_r ($reponse) ;
    
    // while($donnees = $req->fetch())

    // {
    //     print_r($donnees['nom'] .$donnees['prix'] .' Euro<br>') ;
    //     // echo'<P>'.$donnees['username'].'</p>';
    //     // echo'<P>'.$donnees['password'].'</p>';
    // }

    //  $req->closeCursor(); 




?>