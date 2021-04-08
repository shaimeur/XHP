<?php
// function updateUserByColumn($con,$tabel,$col,$val,$id){

//     $sql = $con->prepare("UPDATE ".$tabel." SET ".$col."=:val WHERE id=:id");
//     $sql->bindParam(":val",$val,PDO::PARAM_STR);
//     $sql->bindParam(":id",$id,PDO::PARAM_INT);

//     if($sql->execute()){
//         return true;
//     }else{
//         return false;
//     }
// }



/****
 CRUD
 
 *****/


// Create user
function createUser($con,$nom,$prenom,$email,$password,$role){
    $sql = $con->prepare("INSERT INTO users (`nom`,`prenom`,`email`,`password`,`role`) VALUES (:nom,:prenom,:email,:password,:role)");
    $sql->bindParam(":nom",$nom,PDO::PARAM_STR);
    $sql->bindParam(":prenom",$prenom,PDO::PARAM_STR);
    $sql->bindParam(":email",$email,PDO::PARAM_STR);
    $sql->bindParam(":password",$password,PDO::PARAM_STR);
    $sql->bindParam(":role",$role,PDO::PARAM_STR);

    if($sql->execute()){
        return $con->lastInsertId();
    }else{
        return false;
    }
}
// get single user
function getUserById($con,$id){
    $sql = $con->prepare("SELECT * FROM users WHERE id=:id");
    $sql->bindParam(":id",$id,PDO::PARAM_INT);
    if($sql->execute()){
        $data = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $data[0];
    }else{
        return false;
    }
}
// find user
function findUserByEmail($con,$email){
    $sql = $con->prepare("SELECT * FROM users WHERE email=:email");
    $sql->bindParam(":email",$email,PDO::PARAM_STR);
    if($sql->execute()){
        $data = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $data[0];
    }else{
        return false;
    }
}
// get all users
function getAllUsers($con){
    $sql = $con->prepare("SELECT * FROM users WHERE role='user'");
    if($sql->execute()){
        $data = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }else{
        return false;
    }
}
// update
function updateUser($con,$nom,$prenom,$email,$password,$role,$id){
    $sql = $con->prepare("UPDATE users SET nom=:nom, prenom=:prenom, email=:email, password=:password, role=:role WHERE id=:id");
    $sql->bindParam(":nom",$nom,PDO::PARAM_STR);
    $sql->bindParam(":prenom",$prenom,PDO::PARAM_STR);
    $sql->bindParam(":email",$email,PDO::PARAM_STR);
    $sql->bindParam(":password",$password,PDO::PARAM_STR);
    $sql->bindParam(":role",$role,PDO::PARAM_STR);
    $sql->bindParam(":id",$id,PDO::PARAM_INT);

    if($sql->execute()){
        return true;
    }else{
        return false;
    }
}
// delete user
function deleteUser($con,$id){
    $sql = $con->prepare("DELETE FROM users WHERE id=:id");
    $sql->bindParam(":id",$id,PDO::PARAM_INT);

    if($sql->execute()){
        return true;
    }else{
        return false;
    }
}


//////////// Technology

// create
function creatTechno($con,$name){
    $sql = $con->prepare("INSERT INTO technos (`name`) VALUES (:name)");
    $sql->bindParam(":name",$name,PDO::PARAM_STR);
    if($sql->execute()){
        return true;
    }else{
        return false;
    }
}
// update
function updateTechno($con,$name,$id)
{
    $sql = $con->prepare("INSERT INTO technos (`name`) VALUES (:name) WHERE id=:id");
    $sql->bindParam(":name",$name,PDO::PARAM_STR);
    $sql->bindParam(":id",$id,PDO::PARAM_INT);
    if($sql->execute()){
        return true;
    }else{
        return false;
    }
}
// delete
function deleteTechno($con,$id)
{
    $sql = $con->prepare("DELETE FROM technos WHERE id=:id");
    $sql->bindParam(":id",$id,PDO::PARAM_INT);
    if($sql->execute()){
        return true;
    }else{
        return false;
    }
}
// getAll
function getAllTechnos($con)
{
    $sql = $con->prepare("SELECT * FROM technos");
    if($sql->execute()){
        $data = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }else{
        return false;
    }
}
// get singl techno
function getSingleTechnos($con,$id)
{
    $sql = $con->prepare("SELECT * FROM technos WHERE id=:id");
    $sql->bindParam(":id",$id,PDO::PARAM_INT);
    if($sql->execute()){
        $data = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $data[0];
    }else{
        return false;
    }
}

////// Formations

// create
function creatFormations($con,$userId,$technoId,$date){
    $sql = $con->prepare("INSERT INTO formations (`user_id`,`techno_id`,`date`) VALUES (:userId,:technoId,:date)");
    $sql->bindParam(":userId",$userId,PDO::PARAM_INT);
    $sql->bindParam(":technoId",$technoId,PDO::PARAM_INT);
    $sql->bindParam(":date",$date,PDO::PARAM_STR);
    if($sql->execute()){
        return true;
    }else{
        return false;
    }
}
// update
function updateFormations($con,$userId,$technoId,$date,$id)
{
    $sql = $con->prepare("UPDATE formations SET user_id=:userId, techno_id=technoId, date=:date WHERE id=:id");
    $sql->bindParam(":userId",$userId,PDO::PARAM_INT);
    $sql->bindParam(":technoId",$technoId,PDO::PARAM_INT);
    $sql->bindParam(":date",$date,PDO::PARAM_STR);
    $sql->bindParam(":id",$id,PDO::PARAM_INT);
    if($sql->execute()){
        return true;
    }else{
        return false;
    }
}
// delete
function deleteFormations($con,$id)
{
    $sql = $con->prepare("DELETE FROM formations WHERE id=:id");
    $sql->bindParam(":id",$id,PDO::PARAM_INT);
    if($sql->execute()){
        return true;
    }else{
        return false;
    }
}
// getAll
function getAllformations($con)
{
    $sql = $con->prepare("SELECT * FROM formations");
    if($sql->execute()){
        $data = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }else{
        return false;
    }
}
// get singl techno
function getSingleformations($con,$id)
{
    $sql = $con->prepare("SELECT * FROM formations WHERE id=:id");
    $sql->bindParam(":id",$id,PDO::PARAM_INT);
    if($sql->execute()){
        $data = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $data[0];
    }else{
        return false;
    }
}

///////// level

// Create
function creatLevel($con,$userId,$technoId,$level){
    $sql = $con->prepare("INSERT INTO level (`user_id`,`techno_id`,`level`) VALUES (:userId,:technoId,:level)");
    $sql->bindParam(":userId",$userId,PDO::PARAM_INT);
    $sql->bindParam(":technoId",$technoId,PDO::PARAM_INT);
    $sql->bindParam(":level",$level,PDO::PARAM_INT);
    if($sql->execute()){
        return true;
    }else{
        return false;
    }
}
// update
function updateLevel($con,$userId,$technoId,$level,$id)
{
    $sql = $con->prepare("UPDATE level SET user_id=:userId, techno_id=technoId, level=:level WHERE id=:id");
    $sql->bindParam(":userId",$userId,PDO::PARAM_INT);
    $sql->bindParam(":technoId",$technoId,PDO::PARAM_INT);
    $sql->bindParam(":level",$level,PDO::PARAM_STR);
    $sql->bindParam(":id",$id,PDO::PARAM_INT);
    if($sql->execute()){
        return true;
    }else{
        return false;
    }
}
// delete
function deleteLevel($con,$id)
{
    $sql = $con->prepare("DELETE FROM level WHERE id=:id");
    $sql->bindParam(":id",$id,PDO::PARAM_INT);
    if($sql->execute()){
        return true;
    }else{
        return false;
    }
}
// getAll
function getAllLevels($con)
{
    $sql = $con->prepare("SELECT * FROM level");
    if($sql->execute()){
        $data = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }else{
        return false;
    }
}
// get singl techno
function getSingleLevel($con,$id)
{
    $sql = $con->prepare("SELECT * FROM level WHERE id=:id");
    $sql->bindParam(":id",$id,PDO::PARAM_INT);
    if($sql->execute()){
        $data = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $data[0];
    }else{
        return false;
    }
}