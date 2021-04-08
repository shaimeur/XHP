<?php

// update
require_once '../conect.php';

if(isset($_POST['submit'])){
    
    $id = intval($_POST['id']);
    $nom = $_POST['nom'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
     
    $sql = $con->prepare("UPDATE client SET nom=:name, address=:address, phone=:phone WHERE id=:id");
    $sql->bindParam(":id",$id,PDO::PARAM_INT);
    $sql->bindParam(":name",$nom,PDO::PARAM_STR);
    $sql->bindParam(":address",$address,PDO::PARAM_STR);
    $sql->bindParam(":phone",$phone,PDO::PARAM_STR);
    if($sql->execute()){
        header('location: ../castumer.php');
    } else {
        echo "Cannot update customer!";
    }
}else{
    echo "You don't have direct access!";
}
