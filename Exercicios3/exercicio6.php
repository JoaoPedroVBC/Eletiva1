<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post"> 
        <label for="valor"> Insira o número: </label> 
        <input type="number" id="valor" name="valor" step="any" > 
        <br>
            <label> <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $valor = $_POST["valor"];

                if ($valor == (int)$valor) 
                    { echo "É um número inteiro!";
                }
                else {echo "Arredondado para cima: " . ceil($valor) . "<br>"; 
                    echo "Arredondado para baixo: " . floor($valor) . "<br>"; 
                    echo "Arredondado de forma normal: " . round($valor);}


            }?></label>
        <br>
        <button type="submit"> Enviar </button> 
    </form>
    
</body>
</html>