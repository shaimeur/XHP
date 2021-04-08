<title>Add Birds</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
.col-lg-5 {
    max-width: 49.666667%;
}
</style>
<?php
include 'header.php';
include 'conect.php';
$stmt3 = $con->prepare("SELECT * FROM `client`");
$stmt3->execute();
$stmt4 = $con->prepare("SELECT * FROM `produit`");
$stmt4->execute();
?>
<form action="add_bird.php" method="POST">
  <div class="form-group">
   
  <select class="form-control" name="client" required>
     <option></option>
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
  <option></option>
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
    <input type="" class="form-control" name="category" placeholder="Enter Category" required>
  </div>
  <div class="form-group ">
    <input type="" class="form-control " name="type" placeholder="Enter Type"required> 
  </div>
  <div class="form-group">
    <input type=""  class="form-control " name="noise" placeholder="Enter Noise"required >
  </div>
  <div class="form-group">
    <input type=""  class="form-control" name="cost" placeholder="Enter Cost" required>
  </div>
  <button type="submit" name="save" class="btn btn-info btn-block">Save</button>
</form>


<?php if (isset($_POST['save'])) { 
    $client = $_POST['client'];
    $produit = $_POST['produit'];
    $category = $_POST['category'];
    $noise = $_POST['noise'];
    $type = $_POST['type'];
    $cost = $_POST['cost'];

    $sql = "INSERT INTO birds (id_client, id_produit, category,noise, type, cost) VALUES (?,?,?,?,?,?)";
    try {
        $stm = $con->prepare($sql);
   
            $stm->execute(array ( $client,  $produit, $category,$noise,  $type, $cost));
     
    } catch (\PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    header("location: brids.php");
}