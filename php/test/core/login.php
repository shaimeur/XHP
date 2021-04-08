<?php

require_once "./database.php";
require_once "./functions.php";

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($email)||empty($password)){
        // redirect to login page
        header("location: ".BASE_URL."/login.php?e=Please fill all required fields!");
    }

    $user = findUserByEmail($con,$email);

    if($password == $user['password']){
        if($user['role'] == "admin"){
            session_start();
            $_SESSION['logged'] = 1;
            $_SESSION['email'] = $email;
            $_SESSION['role'] = "admin";
            // redirect to admin page
            header("location: ".BASE_URL."/admin/index.php");
        }elseif($user['role'] == "user"){
            session_start();
            $_SESSION['logged'] = 1;
            $_SESSION['email'] = $email;
            $_SESSION['role'] = "user";
            // redirect to user page
            header("location: ".BASE_URL."/user/index.php");
        }else {
            // redirect to login page
            header("location: ".BASE_URL."/login.php?e=You dont have a access!");
        }
    }else{
        // redirect to login page
        header("location: ".BASE_URL."/login.php?e=Credentials are not correct!");
    }
}