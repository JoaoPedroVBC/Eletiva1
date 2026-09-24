<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercicio 13</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>Exercicio 13</h1>
<form method="post">
<div class="mb-3">
              <label for="frase" class="form-label">Escreva uma frase: </label>
              <input type="text" id="frase" name="frase" class="form-control" required="">
            </div>
<div class="mb-3">
<label> 
<?php if ($_POST) {
    $frase = $_POST["frase"];
    $separar = explode(" ",$frase);
    $guardar = "";
    
    for ($i = 0; $i < count($separar); $i++){

        if (strlen($separar[$i]) > strlen($guardar)){
            $guardar = $separar[$i];
        }
    }

    echo "Tem ". count($separar). " palavras". "<br>"; 
    echo "A maior palavra é: ". $guardar;

} 

?>

</label>    

</div>

<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>