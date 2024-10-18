<?php
    if(!isset($_GET['name']) || 
    !isset($_GET['city']) || 
    !isset($_GET['weapon'])){
        header("Location: getpost.php");
        exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><?php echo $_GET['name']; ?></h3>
    <h3><?php echo $_GET['city']; ?></h3>
    <h3><?php echo $_GET['weapon']; ?></h3>
    <a href="./getpost.php">Kembali</a>
</body>
</html>