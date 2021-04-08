<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>inscription</title>
</head>
<body>
    

          <form action="signUp_post.php" method="post">
            <h1>Sign Up</h1>
            <?php if(isset($_GET['e'])){?>
                <div class="alert">
                    <?= $_GET['e']; ?>
                </div>
            <?php } ?>
                <div class="form-row">
                    <div class="form-group">
                        <label for="nom">Nom:</label>
                        <input required placeholder="Nom..."  type="text" name="nom" id="nom" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prénom:</label>
                        <input required placeholder="Prenom..."  type="text" name="prenom" id="prenom" class="form-control">
                    </div>
                </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input required placeholder="Email..."  type="text" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input required placeholder="password..."  type="password" name="password" id="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="confpassword">Confirme Password:</label>
                        <input required placeholder="Confirme Password"  type="password" name="confpassword" id="confpassword" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="submit">Signup</button>
                    </div>
                  
          </form>
</body>
</html>