<?php
setcookie('prix', '12', time() + 365*24*3600, null, null, false, true); // On écrit un cookie
setcookie('pays', 'Maroc', time() + 365*24*3600, null, null, false, true); // On écrit un autre cookie...
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
// Et SEULEMENT MAINTENANT, on peut commencer à écrire du code html
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        Hé ! Je me souviens de toi !<br />
        Tu t'appelles <?php echo $_COOKIE['prix']; ?> et tu viens de <?php echo $_COOKIE['pays']; ?> c'est bien ça ?
    </p>
</body>
</html>