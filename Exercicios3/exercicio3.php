<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1></h1>
<form method="post">
<div class="mb-3">
              <label for="texto1" class="form-label">Insira o primeiro texto: </label>
              <input type="text" id="texto1" name="texto1" class="form-control" required="">
            </div><div class="mb-3">
              <label for="texto2" class="form-label">Insira o segundo texto:</label>
              <input type="text" id="texto2" name="texto2" class="form-control" required="">
            </div>
            <div class="mb-3">
              <label for="texto1" class="form-label"> <?php if($_POST){
                $texto1 = $_POST["texto1"];
                $texto2 = $_POST["texto2"];

                if (strpos ($texto1, $texto2) !== false) {    
                    echo "A segunda palavra contém na primeira! !";
                }
                else{echo "Não contém nada!!";}

               } ?> </label> </div> 
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>