<?php

// update
require_once '../conect.php';

if(isset($_POST['submit'])){
    
    $id = intval($_POST['id']);

     
//     $sql = $con->prepare("DELETE FROM client WHERE id=:id");
//     $sql->bindParam(":id",$id,PDO::PARAM_INT);
 
//     if($sql->execute()){
//         header('location: ../castumer.php');
//     } else {
//         echo "Cannot delete customer!";
//     }
// }
$sql = "DELETE FROM birds WHERE id =  :id";
$stmt = $con->prepare($sql);
$stmt->bindParam(':id', $_POST['id'], PDO::PARAM_INT);   
$stmt->execute();

