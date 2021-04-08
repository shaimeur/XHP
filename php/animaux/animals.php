<title>animaux</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<?php
include 'header.php';
include 'conect.php';
$stmt2 = $con->prepare("SELECT * FROM `animals`");
$stmt2->execute();

?>

<link rel="stylesheet" href="css/tabel.css">
<body class="animals">
     <section>
       <h1>Tableux De animaux</h1>
       <div class="tbl-header">
         <table cellpadding="0" cellspacing="0">
           <thead>
             <tr>
               <th>Pet_iD</th>
               <th>Pet_category</th>
               <th>breed</th>
               <th>Weight(kg)</th>
               <th>Height(cm)</th>
               <th>Age(m)</th>
               <th>Fur</th>
               <th>Cost(Rs)</th>
             </tr>
           </thead>
         </table>
       </div>
       <div class="tbl-content">
         <table cellpadding="0" cellspacing="0">
           <tbody>
     <?php
     foreach ($stmt2 as $stm) {
     echo '  
             <tr>
               <td>' .$stm['id'] .'</td>
               <td>' .$stm['Pet_category'] .'</td>
               <td>' .$stm['breed'] .'</td>
               <td>' .$stm['weight'] .'</td>
               <td>' .$stm['height'] .'</td>
               <td>' .$stm['age'] .'</td>
               <td>' .$stm['fur'] .'</td>
               <td>' .$stm['cost'] .'</td>
             </tr>
    ';};
    echo'
    </tbody>
    </table>
  </div>
</section>

</body>
</div> <!-- end main-container -->

    <form method="POST" class="botons">
    <button type="submit" id="delet" name="forDelete" class="btn btn-5 danger">Delete<i style="margin-left: 5px;" class="fas fa-trash"></i></button>
    <button type="button" data-toggle="modal" data-target="#staticBackdrop" class="btn btn-5 primery">Update<i style="margin-left: 5px;"class="far fa-edit"></i></button>
    <button class="btn btn-5"><a href="addanimal.php">Add</a> <i style="margin-left: 5px;"  class="fas fa-plus-circle"></i></button>
    <!-- Button trigger modal -->';
    
    ?>
    
    <div class="deletis">
        <i class="fas fa-trash"></i>
        <input type="text" name="delateAnimal" placeholder="Enter Id To delete">
    </div>

    </form>
<?php
include 'conect.php';
if(isset($_POST['forDelete'])){
  $delateAnimal =$_POST['delateAnimal'];
  $stmts = $con->prepare("DELETE FROM `animals` WHERE id = '$delateAnimal'");
  $stmts->execute();
  echo "<script>window.location.assign('animals.php') ;</script>";
}
?>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title mr-5" id="staticBackdropLabel">Update</h5>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

        <button type="button" class="close ml-5 position-absolute" data-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
      <form method="POST">
  <div class="form-group">
    <input type="" class="form-control" name="Pet_iD" placeholder="Enter Pet_iD">
  </div>
  <div class="form-group">
    <input type="" class="form-control" name="Pet_category"  placeholder="Enter Pet_category">
  </div>
  <div class="form-group">
    <input type="" class="form-control" name="Breed" placeholder="Enter Breed">
  </div>
  <div class="form-group">
    <input type="" class="form-control" name="cost" placeholder="Enter Cost">
  </div>
  <div class="form-group ">
    <input type="" class="form-control col-lg-5 d-inline" name="Weight" placeholder="Enter Weight">
    <input type="" class="form-control col-lg-5 d-inline" name="Height"  placeholder="Enter Height">
  </div>
  <div class="form-group">
    <input type=""  class="form-control col-lg-5 d-inline" name="Age" placeholder="Enter Age" >
    <input type="" class="form-control col-lg-5 d-inline" name="Fur" placeholder="Enter Fur" >
  </div>
  <button type="submit" name="Updates" class="btn btn-info btn-block">Save</button>
</form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
<?php
include 'conect.php';
if(isset($_POST['Updates'])){
  $Pet_iD =$_POST['Pet_iD'];
  $Pet_category =$_POST['Pet_category'];
  $Breed =$_POST['Breed'];
  $Weight =$_POST['Weight'];
  $Height =$_POST['Height'];
  $Age =$_POST['Age'];
  $Fur=$_POST['Fur'];
  $cost=$_POST['cost'];
  $stmts = $con->prepare("UPDATE `animals` SET `id` = ' $Pet_iD', `breed` = '$Breed', `weight` = '$Weight', `height` = '$Height', `age` = '$Age', `fur` = ' $Fur', `Pet_category` = '$Pet_category' ,`cost` = '$cost' WHERE `animals`.`id` =  $Pet_iD;
  ");
  $stmts->execute();
  echo "<script>window.location.assign('animals.php') ;</script>";
}
include 'footer.php';

?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
   <script>
  delet.addEventListener('click',function(event){
        
        var txt;
        var r = confirm("Etes-vous sûr que vous voulez supprimer");
        if (r == true) {
          txt = "success";
        } else {
            event.preventDefault();
        }
    })
   </script>
</body>

</html>