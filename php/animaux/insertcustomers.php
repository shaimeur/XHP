<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
</head>

<?php
include 'header.php';
?>

<main>
<body>
<section>
<form action="./core/insert-custmmer.php" method="post">
<h1>Insert a new costumer</h1>
<div class="form-group">
<label for="text">Nom du client:</label>
<input type="text" name="nom" placeholder="Enter le nom du client" class="form-control" required>
</div>
<div class="form-group">
<label for="text">Adresse du client:</label>
<input type="text" name="address" placeholder="Enter l'adresse du client" class="form-control" required>
</div>
<div class="form-group">
<label for="text">Numero de telephone du client:</label>
<input type="text" name="phone" placeholder="Enter Numero du telephone" class="form-control" required>
</div>
<div class="form-group">
<button type="submit" name="submit" class="btn btn-primary">Add Client</button>
<button type="reset" class="btn btn-primary">Effacer</button>
</div>
</form>
</section>
</main>

<?php
include 'footer.php'
?>

    
</body>
</html>













?>