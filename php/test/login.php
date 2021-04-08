<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <main>
        <section>
            <form action="./core/login.php" method="post">
            <h1>Login</h1>
            <?php if(isset($_GET['e'])){?>
                <div class="alert">
                    <?= $_GET['e']; ?>
                </div>
            <?php } ?>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input placeholder="Email..."  type="email" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input placeholder="password..."  type="password" name="password" id="password" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="submit">Login</button>
                </div>
            </form>
        </section>
    </main>
</body>
</html>