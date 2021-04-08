<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <form action="formulaire.php" method="post">

        <p>Nom     <input type="text" name="nom"></p> 
        <p>Object  <input type="text" name="subject" id=""></p> 
        <p>E-mail  <input type="email" name="to_email" id=""></p> 
        <p>Message <textarea name="message" id="" cols="30" rows="10"></textarea></p> 
        <input type="submit" value="Envoyer" >
       
       

          
            <?php     
                
                
                
                $to_email = 'haimeursaad@gmail . com';
                $subject = 'Testing PHP Mail';
                $message = 'This mail is sent using the PHP mail function';
                $headers = 'From: noreply @ company . com';
                mail($to_email,$subject,$message,$headers);



            
            ?>

       
    
    
    </form>
</body>
</html>