<?php

require_once "./database.php";
require_once "./functions.php";
if(isset($_POST['submit'])){

    $nom = $_POST['name'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordconf = $_POST['passwordconf'];

    if(empty($nom) || empty($prenom) || empty($email) || empty($password) || empty($passwordconf)){
        // redirect to signup page
        header("location: ".BASE_URL."/sign-up.php?e=Please fill all required fields!");
    }
    
    if(!($password === $passwordconf)){
        // redirect to signup page
        header("location: ".BASE_URL."/sign-up.php?e=Password not match!");
    }
    $newUser = createUser($con,$nom,$prenom,$email,$password,"user");
    if($newUser){
        session_start();
        $_SESSION['logged'] = 1;
        $_SESSION['id'] = $newUser;
        $_SESSION['email'] = $email;
        $_SESSION['role'] = "user";
        $_SESSION['from'] = "signup";
        header("location: ".BASE_URL."/user/add-techno.php");
    }else {
        header("location: ".BASE_URL."/sign-up.php?e=Unknown error, please try again letter!");
    }

}