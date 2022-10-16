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
        echo "Logged in as " . $_SESSION["name"] . "!" ;
    ?>
    <form action="filuppladdning2.php" method="post" enctype="multipart/form-data">
      Select image to upload:
      <input type="file" name="fileToUpload" id="fileToUpload" />
      <input type="submit" value="Upload Image" name="submit" />
    </form>


</body>

</html>