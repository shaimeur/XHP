<title>Customers</title>

<?php
include 'header.php';
include 'conect.php';
$stmt2 = $con->prepare("SELECT * FROM `client`");
$stmt2->execute();

?>

<link rel="stylesheet" href="css/tabel.css">
<body class="animals">
     <section>
       <h1>Tableux De Customers</h1>
       <div class="tbl-header">
         <table cellpadding="0" cellspacing="0">
           <thead>
             <tr>
               <th>Id</th>
               <th>Nom</th>
               <th>adress</th>
               <th>phone</th>
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
               <td>' .$stm['nom'] .'</td>
               <td>' .$stm['address'] .'</td>
               <td>' .$stm['phone'] .'</td>
             </tr>
           
     ';};
     ?>
     </tbody>
         </table>
       </div>
     </section>
     
     </body>
</div> <!-- end main-container -->
    <div class="botons">
      <a href="./updatecustomer.php"><button type="submit"class="btn btn-5 primery">Update<i style="margin-left: 5px;"  class="far fa-edit"></i></a></button></a>
      <a href="./insertcustomers.php"><button type="submit"class="btn btn-5">Add<i style="margin-left: 5px;"  class="fas fa-plus-circle"></i></button></a>
      <form action="./core/delete-costumer.php" method="post">
      <button type="submit" class="btn btn-5 danger" ><i style="margin-left: 5px;" class="fas fa-trash"></i></button>
      <div class="deletis">
        <i class="fas fa-trash"></i>
        <input type="text" name="id" placeholder="Enter Id To delete">
        </form>
    </div>

    </div>
<?php
include 'footer.php'
?>

</body>

</html>