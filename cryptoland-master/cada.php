<?php 
include_once("conexao.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cadastro.php" method="post">
    <label for="nome">Nome</label>
    <input type="text" name="nome">
    <input type="submit" value="Enviar">

    </form>
</body>
</html>