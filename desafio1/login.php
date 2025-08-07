<?php
session_start();
$loginCadastrado = "gabriel";
$senhaCadastrada = "123456";


if (!empty($_POST['login']) && !empty($_POST['password'])){
   if(($_POST['login'] == $loginCadastrado) && $_POST['password'] == $senhaCadastrada){
    $_SESSION['login'] = $loginCadastrado;
    $_SESSION['senha'] = $senhaCadastrada;
    setcookie('tema',$_POST['tema']);
    header('location: welcome.php');
    exit;
   }
   else{
    header('location: index.php?erro=1');
    exit;
   }

};
?>