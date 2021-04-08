<?php


    $bdd = new PDO('mysql:host=localhost;dbname=games','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


    //Les fonctions scalaires
    // $reponse = $bdd->query('SELECT UPPER(nom) AS nom_maj, possesseur, console, prix FROM jeux_video');

    // while ($donnees = $reponse->fetch())
    // {
    // 	echo $donnees['nom_maj'] . ' ';
    // 	echo $donnees['possesseur'] . ' ';
    // 	echo $donnees['console'] . ' ';
    // 	echo $donnees['prix'] . ' EURO.<br>';

    // }

    // $reponse->closeCursor();

    // Les fonctions d'agrégat

    
        $reponse = $bdd->query('SELECT COUNT(nom) AS nbjeux, possesseur FROM jeux_video GROUP BY possesseur');

        while($donnees = $reponse->fetch()){
            echo $donnees['nbjeux']." ";
            echo $donnees['possesseur']." <br>";
        }
        



        $reponse->closeCursor();



    ?>



