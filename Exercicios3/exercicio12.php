<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post"> 
    <label for="nome"> Digite seu nick: </label> 
    <input type="text" name="nome" id="nome"><br>
    <?php if ($_POST){
        $nome = $_POST["nome"];
        $caracteres = "abcdefghijklmnopqrstuvwxyz0123456789";
        $senha = "";

        for ($i = 0; $i < 8; $i++) {
            $senha .= $caracteres[rand(0, strlen($caracteres)-1)];
        }
        echo "Nick: " . $nome ."<br>";
        echo "Senha Aleatória: " . $senha . "<br>";
    } 
    


    ?>


    <button type="submit"> Enviar </button>
    </form>
    
</body>
</html>