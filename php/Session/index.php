<?php 
session_start();

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($email == "abby@email.com" && $password == 1234){
        $_SESSION['loggedin'] = true;
        if(isset($_POST['remeberme'])){
            setcookie('remeberMe', true, time() + (86400 * 30));
        }
    }else{
        header("location: login.php?err=Wrong infos");
    }
}
if(!isset($_SESSION['loggedin'])){

    echo "Session not found";
    echo "<br>";
    echo "Checking cookies";

    if(isset($_COOKIE['remeberMe'])){

        echo "<br>Cookies found: ".$_COOKIE['remeberMe'];

        if($_COOKIE['remeberMe'] == 1){

            echo "<br>Setting session";

            $_SESSION['loggedin'] = true;

        }else{
            echo "<br>Wrong cookies";
            echo "<br> taking you to login page";
            header("location: login.php");
        }
    }else{

        echo "<br>No cookies found";
        echo "<br> taking you to login page";
        header("location: login.php");
    }
}