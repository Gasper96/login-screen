<?php
unset($_SESSION['login']);
unset($_SESSION['senha']);
setcookie('tema','',-1);
header('location:index.php');
exit;
?>