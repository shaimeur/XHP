<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billets</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Mon Super Blog!</h1>

    <?php

            include_once"./cnx.php";

            $req= $bdd->prepare('SELECT id,titre,contenu,date_creation FROM billets ORDER BY date_creation DESC LIMIT 0,5');
            $req->execute();
            $data=$req->fetchAll(PDO::FETCH_ASSOC);
            foreach($data as $key=>$val){
                echo "<h3>".$val['titre']." ".$val['date_creation']."</h3>";
                echo $val['contenu'];
                echo '<a href="commentaires.php">commentaire</a>';
            }


    ?>

    
</body>
</html>