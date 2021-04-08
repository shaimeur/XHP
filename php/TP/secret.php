<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>secret</title>
</head>
<body>
    <?php

        if(isset($_POST['secretPasse']) && $_POST['secretPasse'] == "kangourou" )
        {
            header('location:https://www.google.com/webhp?hl=fr&sa=X&ved=0ahUKEwis-NHDvIbpAhVNzBoKHcl_A1kQPAgH');
        }
        else {
            echo"access denied";
        }
        


    ?>
</body>
</html>

<script>
    alert('rabi3 bekaye');

</script>