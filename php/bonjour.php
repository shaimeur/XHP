<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
        if (isset($_GET['nom']) AND isset($_GET['prenom']) AND isset($_GET['repete']) )
        {
            $_GET['repete'] = (int) $_GET['repete'] ;

             if ($_GET['repete'] >= 1 && $_GET['repete'] <= 100)
            {
                for ($i=0 ; $i< $_GET['repete'] ; $i++)
                    {
                        echo '<p>Bonjour '. $_GET['prenom'] .' '. $_GET['nom'].'!</p>' ;
                    }  
            }
            else{
                echo'<p>ERROOR !!</p>';
            }
        }
        else{
            echo "il faut renseignier le nom et prenom et un nombre de répitition !" ;
        }

        
    ?>

    


</body>
</html>