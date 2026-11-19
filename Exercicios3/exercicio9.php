<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercicio 9</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>Exercicio 9</h1>
<form method="post">
<div class="mb-3">
              <label for="frase" class="form-label" > <h4> Insira uma frase: </h4> </label>
              <input type="text" id="frase" name="frase" class="form-control" required="">
            </div>
            <br>
<div class="mb03" >  
    <label> <h4> <?php if ($_POST) { 
    $frase = $_POST["frase"];

    echo "A frase normal: " . $frase . "<br>";
    echo "Sem espaço no começo: " . trim($frase) . "<br>";
    echo "Sem nenhum espaçamento: " . str_replace(" ", "", $frase);


} ?> </h4>
    </label>
</div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>