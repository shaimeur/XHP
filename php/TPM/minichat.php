<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>minichat</title>
</head>
<body>
    <h1>Bienvenue au meilleur chat!!</h1>

    <form action="minichat_post.php" method="post">
    
        <p>PSEUDO : <input type="text" name="pseudo" id="pseudo"></p>
        <p>COMMENTAIRE : <input type="text" name="commentaire" id="commentaire"></p>
        <p><input type="submit"value="Valider" name="submit" id="submit"></p>
    
    </form>

<?php
    include_once"./cnx.php";
    $R = $bdd->prepare("SELECT pseudo,commentaire,date_commente FROM chat ORDER BY ID DESC LIMIT 0,10");
    $R->execute();
    $data = $R->fetchAll(PDO::FETCH_ASSOC);
    foreach($data as $key=>$val){
        echo "<strong>".$val['pseudo']."</strong> : ";
        echo $val['commentaire']."     ";
        echo $val['date_commente']."<br>";
    }

?>

</body>
</html>