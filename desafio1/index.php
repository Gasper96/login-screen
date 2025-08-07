<?php
if(!empty($_GET['erro'])){
    echo "<div class='error'> Login ou senha inválidos.</div>";
}
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
    <div class="container">
        <form action="login.php" method="post">
            <input name="login" type="text" placeholder="Digite seu login"/>
        </br>
            <input name="password" type="password" placeholder="Digite sua senha"/></br>
            <select name="tema">
                <option value="escuro">Escuro</option>
                <option value="claro">claro</option>
            </select>
            <button>Enviar</button>
        </form>
    </div>
</body>

</html>
