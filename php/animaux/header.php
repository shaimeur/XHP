<?php
session_start();

if(isset($_SESSION['ussername'])){

}else{
    header('location: login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.5.0/css/all.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main-container">

        <!-- HEADER -->
        <header class="block">
            <ul class="header-menu horizontal-list">
                <li>
                    <a class="header-menu-tab" href="home.php"><span style="font-size: 3rem;margin-right: 7px;color: #00bcd4; margin-top: 7px;" class="fa fa-paw " ></span><span id="titel"></span></a>
                </li>
            </ul>
            <div class="profile-menu">
                <form style="display: inline;" action="" method="post"><button  type="submit" name="out" style="padding: 12px;margin-top: 18px;background: #11a8ab;outline: 0;border: 0;color: #fff;">Log out<a href="#26"><span class="fas fa-sign-out-alt "></span></a></button></form>
                <div class="profile-picture small-profile-picture">
                    <img     width= 178% alt="Anne Hathaway picture" src="https://th.bing.com/th/id/OIP.sHOb6gcUkB5doM5YBuJ2hAHaEK?pid=ImgDet&rs=1">
                </div>
            </div>
        </header>
        <script>document.getElementById('titel').innerText= document.title;
    </script>