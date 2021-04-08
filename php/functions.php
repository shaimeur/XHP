<?php

    // $phrase ='Bonjour je suis une phrase !!' ;
    // $nombreDeCarracteres = strlen($phrase) ;
    // $phraseMelanger = str_shuffle($phrase);
    // $ma_variable = str_replace('b','o','bim bam bom');

    // $annee = date('Y');
    // $mois = date('m');
    // $jour = date('d');
    // $heure = date('H');
    // $minute = date('i');

    // echo 'La date est !'.$jour.'/'.$mois.'/'.$annee.' time is '.$heure.':'.$minute ;



    // echo ' il y a '.$nombreDeCarracteres.' dans cette phrase <br>' ;
    // echo 'voici la phrase   '.$phraseMelanger.'    Bien melanger<br>';

    // echo date('i').'<br>';

    // echo $ma_variable.'<br>' ;




    // // how to creat a function

    // function sayHello($name)
    // {
    //     echo 'Bonjour '.$name.'<br>' ;
    // }

    // sayHello('Saad') ;
    // sayHello('Ash') ;
    // sayHello('Red') ;



    //     function volumeCone($r,$h)
    //     {
    //        $valeur = $r*$r*3.14*$h*(1/3);
           
    //        return $valeur ;
    //     }

         
    //     $valeur = volumeCone(2,4) ;

    //     echo $valeur ;



        function primary($n)
        {
            // $valeur = $n%1;
                if($n%1 == 0 && $n%$n==0){
                    echo "c'est un nombre premier";
                }
                else{
                    echo"try with another number";
                }
        }
        primary(24);
?>