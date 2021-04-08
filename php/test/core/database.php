<?php
// Constants
define("BASE_URL","http://localhost:3000");
define("HOST","localhost");
define("USER","root");
define("PASSWORD","");
define("DB","webdev");

// pdo
try{
    $con = new PDO("mysql:host=".HOST.";dbname=".DB.";charset=utf8",USER,PASSWORD);
}catch(PDOException $e){
    echo "error database: ". $e->getMessage();
    die();
}

// Procedural
// $con = mysqli_connect(HOST,USER,PASSWORD,DB);
// if(!$con){
//     echo mysqli_connect_error();
// }else{
//     echo "Connected successfully";
// }