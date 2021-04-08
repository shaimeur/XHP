<title>Add Animals</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
.col-lg-5 {
    max-width: 49.666667%;
}
</style>
<?php
include 'header.php';
?>
<button class="btn btn-info mb-3">Back to back</button>
<form method="POST">
  <div class="form-group">
    <input type="" class="form-control" name="id" placeholder="Enter Pet_iD">
  </div>
  <div class="form-group">
    <input type="" class="form-control" name="Pet_category"  placeholder="Enter Pet_category">
  </div>
  <div class="form-group">
    <input type="" class="form-control" name="breed" placeholder="Enter Breed">
  </div>
  <div class="form-group">
    <input type="" class="form-control" name="cost" placeholder="Enter Cost">
  </div>
  <div class="form-group ">
    <input type="" class="form-control col-lg-5 d-inline" name="weight" placeholder="Enter Weight">
    <input type="" class="form-control col-lg-5 d-inline" name="height"  placeholder="Enter Height">
  </div>
  <div class="form-group">
    <input type=""  class="form-control col-lg-5 d-inline" name="age" placeholder="Enter Age" >
    <input type="" class="form-control col-lg-5 d-inline" name="fur" placeholder="Enter Fur" >
  </div>
  <button type="submit" name="save" class="btn btn-info btn-block">Save</button>
</form>
<?php
include 'footer.php';
include 'conect.php';
if(isset($_POST['save'])){
  $Pet_iD =$_POST['id'];
  $Pet_category =$_POST['Pet_category'];
  $Breed =$_POST['breed'];
  $Weight =$_POST['weight'];
  $Height =$_POST['height'];
  $Age =$_POST['age'];
  $Fur=$_POST['fur'];
  $cost=$_POST['cost'];
  $stmts = $con->prepare("INSERT INTO `animals` (`id`, `Pet_category` , `breed`, `weight`, `height`, `age`, `fur`,`cost`) VALUES ('$Pet_iD', '$Pet_category', '$Breed', '$Weight', ' $Height', '$Age', '$Fur','$cost')");
  $stmts->execute();
  echo "<script>window.location.assign('animals.php') ;</script>";
}
?>
<?php
if(isset($_POST['out'])){
  session_unset();
  session_destroy();
  header('location: login.php');
}
?>