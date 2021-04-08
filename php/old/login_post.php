<?php
        
        include_once"./cnx.php";
        if(isset($_POST['submit'])){
            $req = $bdd->prepare("SELECT `email`, `password` FROM developpeurs ");
            // $req->bindParam(':email',$_POST['email'],PDO::PARAM_STR);
            // $req->bindParam(':password',$_POST['password'],PDO::PARAM_STR);
            if($req ->execute()){
                header('Location: enregistrement.php?msg=Loged successfully');
            }else{
                echo "error";
            }
    }
    ?>