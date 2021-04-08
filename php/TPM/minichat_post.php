<?php


    include_once"./cnx.php";
    include_once"./spreadPost.php";

    if(isset($_POST['submit'])){
        //var_dump($_POST);
        // $pseudo = $_POST["pseudo"];
        // $comment = $_POST["commentaire"];

         $req = $bdd->prepare("INSERT INTO chat (`pseudo`,`commentaire`) VALUES (:pseudo,:commentaire)");// 
        $req -> bindParam(':pseudo',$_POST['pseudo'],PDO::PARAM_STR);
        $req -> bindParam(':commentaire',$_POST['commentaire'],PDO::PARAM_STR);
        // var_dump($req);
         if($req ->execute()){
                  //echo"commentaire ajouter par :".$_POST['pseudo'];
                 header('Location: minichat.php');
         }else{
             echo"Error!!";
         }
    }
    



?>