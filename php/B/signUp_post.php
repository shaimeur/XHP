<?php
        
        include_once"./cnx.php";
        if(isset($_POST['submit'])){
            $req = $bdd->prepare("INSERT INTO users (`nom`,`prenom`,`email`,`password`) VALUES (:nom,:prenom,:email,:password)");
            $req->bindParam(':nom',$_POST['nom'],PDO::PARAM_STR);
            $req->bindParam(':prenom',$_POST['prenom'],PDO::PARAM_STR);
            $req->bindParam(':email',$_POST['email'],PDO::PARAM_STR);
            $req->bindParam(':password',$_POST['password'],PDO::PARAM_STR);
            if($req ->execute()){
                header('Location: technos.php?msg=Devlopper added successfully');
            }else{
                echo "error";
            }
    }
    ?>