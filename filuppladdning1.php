<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cy@</title>
</head>

<body>
    <?php
    if ($_POST["password"] == "123") {
          $_SESSION["name"] = $_POST["name"] ;
         header("location: rightpassword.php") ;
    } else {
         header("location: wrongpassword.php") ;
    }
    ?>
</body>

</html>