<?php
require_once "../core/database.php";
require_once "../core/functions.php";
require_once "./header.php";

if(!isset($_SESSION['from'])){
    die("This page is expired");
}
if($_SESSION['from'] != "signup"){
    die("This page is expimred");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add technology</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <main>
        <section>
            <form action="../core/add-technology.php" method="post">
            <h1>Add technology</h1>
            <?php if(isset($_GET['e'])){?>
                <div class="alert">
                    <?= $_GET['e']; ?>
                </div>
            <?php } ?>

            <?php 
                $technos = getAllTechnos($con);
                foreach($technos as $techno){?>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Nom:</label>
                            <input readonly required value="<?= $techno['name']?>"  type="text" id="name" class="form-control">
                            <input type="hidden" name="techid[]" value="<?= $techno['id']?>">
                        </div>
                        <div class="form-group">
                            <label for="level">Level:</label>
                            <select name="level[]" id="level" class="form-control">
                                <option>Level...</option>
                                <option value="-1">I dont konw</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
            <?php }?>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="submit">Signup</button>
                </div>
            </form>
        </section>
    </main>
</body>
</html>