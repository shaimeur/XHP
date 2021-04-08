<?php
foreach($_POST as $key => $value){ // (array as key => value ) || (array as value )    
    $GLOBALS[$key] = $value;            
}
echo 'commentaire :'.$commentaire ;
