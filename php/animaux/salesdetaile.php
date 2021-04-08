<title>Sales Detaile</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<?php
include 'header.php';
include 'conect.php';
$stmt2 = $con->prepare("SELECT * FROM saled  INNER JOIN client  ON saled.sd_Id =  client.id");

$stmt2->execute();

?>

<link rel="stylesheet" href="css/tabel.css">
<body class="animals">
     <section>
       <h1>Tableux De Sales Detaile</h1>
       <div class="tbl-header">
         <table cellpadding="0" cellspacing="0">
           <thead>
             <tr>
               <th>sd_Id</th>
               <th>cs_id </th>
               <th>nom</th>
               <th>date</th>
               <th>Total</th>
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
               <td>' .$stm['sd_Id'] .'</td>
               <td>' .$stm['cs_id'] .'</td>
               <td>' .$stm['nom'] .'</td>
               <td>' .$stm['date'] .'</td>
               <td>' .$stm['Total'] .'</td>
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
    <!-- Button trigger modal -->';
    
    ?>
    
    <div class="deletis">
        <i class="fas fa-trash"></i>
        <input type="text" name="delatesales" placeholder="Enter Id To delete">
    </div>

    </form>
<?php
include 'conect.php';
if(isset($_POST['forDelete'])){
  $delatesales =$_POST['delatesales'];
  $stmts = $con->prepare("DELETE FROM `saled` WHERE cs_id = '$delatesales'");
  $stmts->execute();
  echo "<script>window.location.assign('saledetaile.php') ;</script>";
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
  $sd_Id =$_POST['sd_Id'];
  $cs_id =$_POST['cs_id'];
  $date =$_POST['date'];
  $Total =$_POST['Total'];
  $stmts = $con->prepare("UPDATE `saled` SET `sd_Id` = ' $sd_Id', `cs_id` = '$cs_id', `date` = '$date', `Total` = '$Total' WHERE `saled`.`sd_Id` =  $sd_Id;");
  $stmts->execute();
  echo "<script>window.location.assign('salesdetaile.php') ;</script>";
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