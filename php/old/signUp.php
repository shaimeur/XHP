<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
</head>
<body>
    <h1>Sign Up</h1>

          <form action="signUp_post.php" method="post">
               <p>nom:<input type="text" required name="nom"></p>
               <p>prénom:<input type="text" required name="prenom"></p>
               <p>email:<input type="email" required name="email"></p>
               <p>mot de passe:<input type="password" required name="password"></p>
               <p>confirme mot de passe:<input type="password" required ></p>

               <p>Technology:<select name="technologies" id=""></select></p>
               <!-- submit -->
               <p><input type="submit" name="submit" value="VALIDER"></p>          
          </form>
</body>
</html>













