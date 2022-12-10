<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Student</title>
</head>
<body>
    <h1>Mimi ndo mwanafunzi</h1>
    <?php
    if(isset($_SESSION['login'])){
        echo $_SESSION['login'];
    }
    ?>
</body>
</html>