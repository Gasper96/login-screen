<?php
session_start();
if (empty($_SESSION['login'])){
    header('location: index.php');
    exit();}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>BEM VINDO</h1>
    <form action="logaut.php">
        <button type="submit">SAIR</button>
    </form>
</body>
</html>
