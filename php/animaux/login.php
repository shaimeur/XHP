<?php
session_start();
include "conect.php";
if($_SERVER['REQUEST_METHOD'] == 'POST') { 
  $Ussername =  filter_var($_POST['Ussername'],FILTER_SANITIZE_STRING);
  $password =  filter_var($_POST['password'],FILTER_SANITIZE_STRING);
  $hashePass = sha1($password);
  $stmt = $con->prepare("SELECT * FROM `admin` WHERE `Email` = ? AND `password` = ?");
  $stmt->execute(array($Ussername,$hashePass));
  $count = $stmt->rowCount();
  if($count === 1 ){
    header("location:home.php");
    $_SESSION['ussername'] =$Ussername;
  }else{
    echo '<div style="margin-bottom: -61px;"class="alert alert-success alert-danger fade show col-lg-3 mt-5 ml-auto mr-auto" role="alert">Nom d\'utilisateur ou mot de passe incorrect .<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>';
  }
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="	https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.5.0/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <body>

        <div class="main-container">

            <!-- HEADER -->
            <form class="account block" method="POST" action=""><!-- ACCOUNT (RIGHT-CONTAINER) -->
                <h2 class="titular">SIGN IN TO YOUR ACCOUNT</h2>
                <div class="input-container">
                    <input type="text" name="Ussername" placeholder="yourname@gmail.com" class="email text-input">
                    <div class="input-icon envelope-icon-acount"><span class="fontawesome-envelope scnd-font-color"></span></div>
                </div>
                <div class="input-container">
                    <input type="text" name="password" placeholder="Password" class="password text-input">
                    <div class="input-icon password-icon"><span class="fontawesome-lock scnd-font-color"></span></div>
                </div>
                <button type="submit" class="sign-in button" href="#22" style="color: #fff;outline: 0;border: 0;">SIGN IN</button>
                <p class="scnd-font-color">Forgot Password?</p>
                <a class="fb-sign-in" href="58">
                    <p><span class="fb-border"><span class="icon zocial-facebook"></span></span>Sign in with Facebook</p>
                </a>
            </form><!-- end right-container -->
        </div> <!-- end main-container -->
        <?php
include 'footer.php'
?>
</body>

    </body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
   
</body>
</html>
