<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exemplo de Funções em PHP</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>Exemplo de Funções em PHP</h1>
<form method="post">
<div class="mb-3">
              <label for="nome" class="form-label">Informe o seu nome:</label>
              <input type="text" id="nome" name="nome" class="form-control" required="">
            </div><div class="mb-3">
              <label for="idade" class="form-label">Informe sua idade:</label>
              <input type="number" id="idade" name="idade" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
 $nome = $_POST['nome'] ?? "";
 $idade = $_POST['idade'] ?? 0;

 if ($nome != "" && $idade > 0) {
    $qtd = strlen($nome);
    echo "<p>O nome é: $nome";
    echo "<p>A idade é: $idade";
    echo "<p>A quantidade de caracteres do nome é $qtd";
    echo "<p>Maiúsculo: ". strtoupper($nome) . "<p>"; 
    $s = str_replace("a", "4", $nome);
    echo "<p>Substituião do a: $s <p>";
    $dia = date("d");
    echo "$dia/";
    $mes = date("m");
    echo "$mes/";
    $ano = date("y");
    echo "$ano";
    $tempo = date("d/m/Y H:i:s");
    echo "<p> $tempo <p>";  
    echo "";

    $exp = pow($idade, 98);
    echo "<p> Exponencial: $exp </p>";
    $valor = rand(1, 10000000000000);
    echo "<p>Valor aleátorio: $valor </p>";
    $resultado = 10.34*2.9;
    $resultado = number_format($resultado, 2, ",",".");
    echo "$resultado";

 }

}
 ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>