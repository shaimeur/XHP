<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./index.php" method="post">
        <input type="email" name="email">
        <input type="password" name="password">
        <input type="checkbox" name="remeberme" id="remeber-me"> <label for="remeber-me">Remeber me</label>
        <button type="submit" name="submit" value="submit">Send</button>
    </form>
    <?php if(isset($_GET['err'])){echo $_GET['err'];} ?>
</body>
</html>