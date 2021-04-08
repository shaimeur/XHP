<title>Update Birds</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
.col-lg-5 {
    max-width: 49.666667%;
}
</style>
<?php
include 'header.php';
include 'conect.php';
$id= $_SESSION['id'];
$stmt3 = $con->prepare("SELECT * FROM `client`");
$stmt3->execute();
$stmt4 = $con->prepare("SELECT * FROM `produit`");
$stmt4->execute();
$stmt5 = $con->prepare("SELECT * FROM `birds` where id = $id");
$stmt5->execute();
while ($row = $stmt5->fetch()) {
    $cl= $row['id_client'];
    $pr= $row['id_produit'];
    $cat= $row['category'];
    $ty= $row['type'];
    $noi= $row['noise'];
     $cos=$row['cost'];
}
?>
<form action="up_birds.php" method="POST">
  <div class="form-group">
   
  <select class="form-control" name="client" required>
     <option value='<?=$cl?>'><?=$cl?></option>
            <?php
           foreach ($stmt3 as $stm) {
                 $id= $stm['id'];
                     $nom = $stm['nom'];
                  echo "<option value='$id'>$nom</option>";
                }
            ?>     
            </select>

       </div>
  <div class="form-group">
       
  <select class="form-control" name="produit" required>
  <option value='<?=$pr?>'><?=$pr?></option>
            <?php
           foreach ($stmt4 as $stm) {
                 $id= $stm['id'];
                     $nom = $stm['name'];
                  echo "<option value='$id'>$nom</option>";
                }
            ?>     
            </select>
  </div>
  <div class="form-group">
    <input type="" class="form-control" value="<?=$cat?>" name="category" placeholder="Enter Category">
  </div>
  <div class="form-group ">
    <input type="" class="form-control " value="<?=$ty?>"  name="type" placeholder="Enter Type"> 
  </div>
  <div class="form-group">
    <input type=""  class="form-control "value="<?=$noi?>"  name="noise" placeholder="Enter Noise" >
  </div>
  <div class="form-group">
    <input type=""  class="form-control"value="<?=$cos?>"  name="cost" placeholder="Enter Cost" >
  </div>
  <button type="submit" name="update" class="btn btn-info btn-block">Update</button>
</form>


<?php if (isset($_POST['update'])) {
    $id= $_SESSION['id']; 
    $client = $_POST['client'];
    $produit = $_POST['produit'];
    $category = $_POST['category'];
    $noise = $_POST['noise'];
    $type = $_POST['type'];
    $cost = $_POST['cost'];
$stmts = $con->prepare("UPDATE birds SET id_client= '$client', id_produit = ' $produit', category = ' $category',noise = ' $noise',type = '$type', cost = ' $cost'WHERE id =  $id ;
  ");
  $stmts->execute();
header("location: brids.php");
}