<?php 
   $name= $_GET['name'];
   $mail=$_GET['mail'];
   $age=$_GET['age'];
   $needle=[".","@"]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php if (strlen($name) > 3 && in_array($needle,$mail) && is_numeric($age) ){
        echo "accesso riuscito"
        }
        else{
            echo "accesso negato"
        }
    ?></p>
</body>
</html>