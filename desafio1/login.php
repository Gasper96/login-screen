<?php
session_start();
$loginCadastrado = "gabriel";
$senhaCadastrada = "123456";


if ((!empty($_POST['login'])) && (!empty($_POST['password']))){
   $senharecebida = htmlspecialchars($_POST['password']);
   $loginrecebido = htmlspecialchars($_POST['login']);

   if(($loginrecebido == $loginCadastrado) && ($senharecebida == $senhaCadastrada)){
    $_SESSION['login'] = $loginrecebido;
    $_SESSION['senha'] = $senharecebida;
    setcookie('tema',$_POST['tema']);
    header('location: welcome.php');
    exit();
   }
   else{
    header('location: index.php?erro=1');
    exit();
   }

};
?>