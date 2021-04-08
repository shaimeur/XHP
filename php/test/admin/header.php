<?php

session_start();

// check for logged session
if(!isset($_SESSION['logged'])){
    // redirect to login page
    header("location: ".BASE_URL."/login.php?e=You're not logged in, please try to login!");
}
// check for user
$user = findUserByEmail($con,$_SESSION['email']);
if(count($user) == 0){
    // redirect to login page
    header("location: ".BASE_URL."/login.php?e=You're not logged in, please try to login!");
}
// check user role
if($user['role'] != "admin"){
    // redirect to login page
    header("location: ".BASE_URL."/login.php?e=You don't have admin access!");
}