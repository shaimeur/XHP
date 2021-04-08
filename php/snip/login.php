




<?php



    // database connection code
    
    
    try {
      $conn = new PDO("mysql:host=localhost;dbname=snip", 'root', '');
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
  
    // get the post records

      $txtusername =  $_POST['username'] ;
      $txtpassword =  $_POST['password'] ;



    // database select SQL code


    $sql = "SELECT INTO `utilisateurs` ( `username`, `password`) VALUES ( '$txtusername', '$txtpassword')";

          $sql = $conn->prepare("select username,password from utilisateurs where username=:username");

          $sql->bindParam(":username",$txtusername,PDO::PARAM_STR);

          if($sql->execute()){

            $result = $sql->fetch(PDO::FETCH_OBJ);
            // var_dump($result);
           
          }  
      if( (isset($_POST['username']) && $_POST['username'] == $result->username ) && (isset($_POST['password']) && $_POST['password'] == $result->password) ) {

            echo "Hello you are welcome to be here !!";

        }
        else {
            echo "get out";
        }




?>