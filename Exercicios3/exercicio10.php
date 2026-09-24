<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 10</title>
</head>
<body> <form method="post"> 
    <h3< <label for="nome"> Informe seu nome completo:  </label> </h3>
    <input type="text" name="nome" id="nome"> 

    <label> <h4> 
            <?php   if ($_POST){
                $nome = $_POST["nome"];
                $nomes = explode(" ", $nome);

                for ($i = 0; $i < count($nomes); $i++) {
                    $nomes[$i] = substr($nomes[$i], 0, 1);
                }
                $sigla = implode(".", $nomes);
                echo "As siglas: " . $sigla;
            } ?>


    </h4> </label>  

    <button type="submit"> Enviar </button>

</form> 
    
</body>
</html>