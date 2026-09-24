<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post"> 
    <label for="frase"> Escreva uma palavra ou frase: </label>
    <input type="text" id="frase" name="frase"> <br>
<br>
    <label> <?php
    if ($_POST) {

        /* 
        Primeira forma.
        $texto = strtolower($_POST["frase"]);   
        $count = 0; 

    for ($i = 0; $i < strlen($texto);$i++){
        if ($texto[$i] == "a" || $texto[$i] == "e" || $texto[$i] == "i" || $texto[$i] == "o" || $texto[$i] == "u"){
            $count++;
        }
   
    }
        echo "Contém: " . $count . " letras vogais.";
}*/ 
        $frase = strtolower($_POST["frase"]);

        $count = substr_count($frase, "a");
        $count += substr_count($frase, "e");
        $count += substr_count($frase, "i");
        $count += substr_count($frase, "o");
        $count += substr_count($frase, "u");

       if ($count > 1)
       {echo "Contém: " . $count . " letras vogais!";}
       else { echo "Contém: " . $count . " vogal.";}
    }
?>
    </label>
<br>
    <button type="submit"> Enviar </button>

    </form>
</body>
</html>