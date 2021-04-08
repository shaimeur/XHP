<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign UP</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <main>
        <section>
            <form action="./core/sign-up.php" method="post">
            <h1>Signup</h1>
            <?php if(isset($_GET['e'])){?>
                <div class="alert">
                    <?= $_GET['e']; ?>
                </div>
            <?php } ?>
                <div class="form-row">
                    <div class="form-group">
                        <label for="name">Nom:</label>
                        <input required placeholder="Nom..."  type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prenom:</label>
                        <input required placeholder="Prenom..."  type="text" name="prenom" id="prenom" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input required placeholder="Email..."  type="email" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input required placeholder="password..."  type="password" name="password" id="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="passwordconf">Confirm password:</label>
                    <input required placeholder="Confirm password..."  type="password" name="passwordconf" id="passwordconf" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="submit">Signup</button>
                </div>
            </form>
        </section>
    </main>
</body>
</html>