<title>Birds</title>

<?php
include 'header.php';
include 'conect.php';
$stmt2 = $con->prepare("SELECT * FROM `birds`");
$stmt2->execute();

?>

<link rel="stylesheet" href="css/tabel.css">
<body class="animals">
     <section>
       <h1>Tableux De Birds</h1>
       <div class="tbl-header">
         <table cellpadding="0" cellspacing="0">
           <thead>
             <tr>
               <th>Bird_iD</th>
               <th>Category</th>
               <th>type</th>
               <th>noise</th>
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
               <td>' .$stm['category'].'</td>
               <td>' .$stm['type'] .'</td>   
               <td>' .$stm['noise'] .'</td>  
               <td>' .$stm['cost'] .'</td>
             </tr>
           
     ';};
     ?>
     </tbody>
         </table>
       </div>
     </section>
     
     </body>
</div> <!-- end main-container -->
<form action="brids.php" method="POST">
    <div class="botons">
    <button type="submit" name="delete" class="btn btn-5 danger">Delete<i style="margin-left: 5px;" class="fas fa-trash"></i></button>
    <button type="submit"name="update" class="btn btn-5 primery">Update<i style="margin-left: 5px;"  class="far fa-edit"></i></button>
    <button type="submit"name="add" class="btn btn-5"> Add<i style="margin-left: 5px;"  class="fas fa-plus-circle"></i></button>
    <div class="deletis">
        <input type="text" name="id"  placeholder="Enter Id To edit or delete">

    </div>

    </div>
    </form>
<?php
include 'footer.php';
if (isset($_POST['delete'])){
  $sql = "DELETE FROM birds WHERE id =  :id";
$stmt = $con->prepare($sql);
$stmt->bindParam(':id', $_POST['id'], PDO::PARAM_INT);   
$stmt->execute();
          $page = $_SERVER['PHP_SELF'];
          $sec = "0.001";
          header("Refresh: $sec; url=$page");  

}
if (isset($_POST['update'])){
   $_SESSION['id']= $_POST['id'];
   header("location: up_birds.php");

}
if (isset($_POST['add'])){
  header("location: add_bird.php");

}
?>

</body>
</html>