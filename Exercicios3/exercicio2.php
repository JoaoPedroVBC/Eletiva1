<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
    <label for="nome"> Insira seu nome: </label> 
    <input type="text" id="nome" name="nome">  <br>
    <label> Nome em Maiúsculo: <?php if ($_POST) {$nome = $_POST["nome"]; echo strtoupper ($nome); } ?> <br> Nome em Minúsculo: <?php if ($_POST) {$nome = $_POST["nome"];} echo strtolower($nome); ?></label> 
    <br>
    <button type="submit"> Enviar </button> 
</form>
</body>
</html>