<!-- <?php
$coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');

foreach($coordonnees as $element)
{
    echo $element . '<br />';
}
?> -->

<!-- <?php
$ceu = array ("Italy" => "Rome",
 "Luxembourg" => "Luxembourg",
  "Belgium" => "Bruxelles",
   "Denmark" => "Copenhague",
    "Finland" => "Helsinki ",
    " France "=>" Paris ",
    " Slovaquie "=>" Bratislava "
    ," Slovénie "=>" Ljubljana "
    ," Allemagne "=>" Berlin ",
    " Grèce "=>" Athènes ",
    " Irlande " => "Dublin",
     "Netherlands" => "Amsterdam",
      "Portugal" => "Lisbonne",
       "Spain" => "Madrid",
        "Sweden" => "Stockholm", 
        "United Kingdom" => "Londres ",
        " Chypre "=>" Nicosie ",
        " Lituanie "=>"Vilnius ",
        " République tchèque "=>" Prague ",
        " Estonie "=>" Tallin ",
        " Hongrie "=>" Budapest ",
        " Lettonie "=>" Riga ",
        " Malte "=>" La Valette ",
        " Autriche "=>" Vienne ",
        " Pologne "=>" Varsovie ");

        foreach($ceu as $cle => $i ) 
        {
                echo'['.$cle.']'. $i.'<br>';  
        }

     ?> -->



     <?php 

        $month = array("1"=>"Janvier",
                       "2"=>"Férvier", 
                       "3"=>"Mars",
                       "4"=>"Avril",
                       "5"=>"Mai",
                       "6"=>"Juin",
                       "7"=>"Juillet",
                       "8"=>"Aout",
                       "9"=>"September",
                       "10"=>"October",
                       "11"=>"November",
                       "12"=>"December" );

            echo"<table border=1>";
            foreach($month as $x =>$value)
            {
                echo"<tr><td>".$x."</tr><td>".$value."</td><tr>" ;
            }

    ?>