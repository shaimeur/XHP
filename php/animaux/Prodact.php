<title>Products</title>

<?php
include 'header.php';
include 'conect.php';
?>

<link rel="stylesheet" href="css/tabel.css">
<body class="animals">
     <section>
       <h1>Tableux De produits</h1>

       <div class="tbl-header">
         <table cellpadding="0" cellspacing="0">
           <thead>
             <tr>
               <th>ID</th>
               <th>Name</th>
               <th>Type</th>
               <th>Cost($)</th>
             </tr>
           </thead>
         </table>
       </div>
       <div class="tbl-content">
         <table cellpadding="0" cellspacing="0">
           <tbody>
     <?php
     //Select
              $R = $con->prepare("SELECT * FROM  `produit` ");
              $R->execute();
              $data = $R->fetchAll(PDO::FETCH_ASSOC);
              foreach($data as $key=>$val) {
              print_r( '  
                      <tr>
                        <td>' .$val['id'] .'</td>
                        <td>' .$val['name'] .'</td>
                        <td>' .$val['type'] .'</td>
                        <td>' .$val['cost'] .'</td>
                      </tr>');    
                                    };

     // INSERT 
     if(isset($_POST['add'])){
      $req = $con->prepare("INSERT INTO produit (`name`,`type`,`cost`) VALUES (:name,:type,:cost)");
      $req->bindParam(':name',$_POST['name'],PDO::PARAM_STR);
      $req->bindParam(':type',$_POST['type'],PDO::PARAM_STR);
      $req->bindParam(':cost',$_POST['cost'],PDO::PARAM_INT);
      if($req ->execute()){
          header('Location: Prodact.php?msg=product added!!');
      }else{
          echo "error";
      }
}                               
//UPDATE 

if(isset($_POST['update'])){
  $id = $_POST['id'];
  $name = $_POST['name'];
  $type = $_POST['type'];
  $cost = $_POST['cost'];

  $sql = $con->prepare("UPDATE produit SET  name=:name, type=:type, cost=:cost WHERE id=:id");
  $sql->bindParam(":id",$id,PDO::PARAM_INT);
  $sql->bindParam(":name",$name,PDO::PARAM_STR);
  $sql->bindParam(":type",$type,PDO::PARAM_STR);
  $sql->bindParam(":cost",$cost,PDO::PARAM_INT);

  if($sql->execute()){
    header('Location: Prodact.php?msg=product updated!!');
  }else{
    echo "error";
  }
}

// DELATE


if(isset($_POST['delete'])){
  $sql = $con->prepare("DELETE FROM produit WHERE id=:id");
  $sql->bindParam(":id",$_POST['deleteId'],PDO::PARAM_INT);

  if($sql->execute()){
    header('Location: Prodact.php?msg=product deleted!!');
  }else{
    echo "error";
  }
}





            
     ?>
     </tbody>
         </table>
       </div>
     </section>
     
     </body>
</div> <!-- end main-container -->
    
    
<div class="botons">

        <button type="submit" data-toggle="modal" data-target="#update-modal" class="btn btn-5 primery"class="btn btn-5" name="update" class="btn btn-5 primery">Update<i style="margin-left: 5px;"  class="far fa-edit"></i></button>

        <button type="button" data-toggle="modal" data-target="#staticBackdrop" class="btn btn-5 primery"class="btn btn-5" name="add">Add<i style="margin-left: 5px;"  class="fas fa-plus-circle"></i></button>
        
       

        <form action="Prodact.php" method="post">
            
            <button type="submit" name="delete" class="btn btn-5 danger">Delete<i style="margin-left: 5px;" class="fas fa-trash"></i></button>
            <div class="deletis">
            <i class="fas fa-trash"></i>
            <input required type="text" name="deleteId" placeholder="Enter Id To delete">
        </div>
        </form>

</div>





<!-- Modal OF THE INSERT START -->

<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add Products</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  <form action="Prodact.php" method="POST">
        <div class="form-group"  >
          <input type="" class="form-control" name="name" placeholder="Name of the Product">
        </div>
        <div class="form-group">
          <input type="" class="form-control" name="type"  placeholder="type of the product">
        </div>
        <div class="form-group">
          <input type="" class="form-control" name="cost" placeholder="Cost in $">
        </div>
  
        <button type="submit" name="add" class="btn btn-info btn-block">ADD</button>
  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal OF THE INSERT  END-->

<!-- Modal OF THE UPDATE STARTE -->

<div class="modal fade" id="update-modal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Update Products</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  <form action="Prodact.php" method="POST">
        <div class="form-group"  >
          <input type="" class="form-control" name="id" placeholder="ID of the Product">
        </div>
        <div class="form-group"  >
          <input type="" class="form-control" name="name" placeholder="Name of the Product">
        </div>
        <div class="form-group">
          <input type="" class="form-control" name="type"  placeholder="type of the product">
        </div>
        <div class="form-group">
          <input type="" class="form-control" name="cost" placeholder="Cost in $">
        </div>
  
        <button type="submit" name="update" class="btn btn-info btn-block">UPDATE</button>
  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal OF THE UPDATE END -->

<link rel="stylesheet" href="http://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<?php
include 'footer.php'
?>



</body>

</html>