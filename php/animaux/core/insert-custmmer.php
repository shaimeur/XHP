<?php 
require_once '../conect.php';

if(isset($_POST['submit'])){
    $nom = $_POST['nom'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
     
    $sql = $con->prepare("INSERT INTO client (nom, address, phone) VALUES (:name, :address, :phone)");
    $sql->bindParam(":name",$nom,PDO::PARAM_STR);
    $sql->bindParam(":address",$address,PDO::PARAM_STR);
    $sql->bindParam(":phone",$phone,PDO::PARAM_STR);
    if($sql->execute()){
        header('location: ../castumer.php');
    } else {
        echo "Cannot add customer!";
    }
} else {
    echo "errror";
}