<?php

require_once "./database.php";
require_once "./functions.php";
session_start();

echo "<pre>";
print_r($_POST);
echo "</pre>";
if(isset($_POST['submit'])){
    $technoIds = $_POST['techid'];
    $Levels = $_POST['level'];

    if(empty($technoIds) || empty($Levels)){
        die('error');
    }
    if(!(count($technoIds) == count($Levels))){
        die("error");
    }
    foreach($technoIds as $key => $id){
        if(creatLevel($con,$_SESSION['id'],$id,$Levels[$key])){
            unset($_SESSION['from']);
            // redirect to signup page
            header("location: ".BASE_URL."/user/profile.php");
        }
    }
    
}