<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commentaires</title>
</head>
<body>
    <?php

        include_once"cnx.php";
        $R= $bdd->prepare('SELECT auteur,date_commentaire,commentaire FROM commentaires ORDER BY date_commentaire LIMIT 0,5');
        $R->execute();
        $data=$R->fetchAll(PDO::FETCH_ASSOC);
        foreach($data as $key=>$val){
            echo "<h3>".$val['auteur']." ".$val['date_commentaire']."</h3>";
            echo $val['commentaire'];
            echo '<a href="index.php">Back</a>';
        }

    ?>
</body>
</html>