<title>Login</title>
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
    <input type="" class="form-control" name="sd_Id" placeholder="Enter Pet_iD">
  </div>
  <div class="form-group">
    <input type="" class="form-control" name="cs_id"  placeholder="Enter Pet_category">
  </div>
  <div class="form-group">
    <input type="date" class="form-control" name="date" placeholder="Enter Breed">
  </div>
  <div class="form-group">
    <input type="" class="form-control" name="Total" placeholder="Enter Cost">
  </div>
  <button type="submit" name="save" class="btn btn-info btn-block">Save</button>
</form>
<?php
include 'footer.php';
include 'conect.php';
if(isset($_POST['save'])){
  $sd_Id =$_POST['sd_Id'];
  $cs_id =$_POST['cs_id'];
  $date =$_POST['date'];
  $Total =$_POST['Total'];
  $stmts = $con->prepare("INSERT INTO `saled` (`sd_Id`, `cs_id`, `date`, `Total`) VALUES ('$sd_Id', '$cs_id', '$date', '$Total');");
  $stmts->execute();
  echo "<script>window.location.assign('salesdetaile.php') ;</script>";
}
?>
<?php
if(isset($_POST['out'])){
  session_unset();
  session_destroy();
  header('location: login.php');
}
?>