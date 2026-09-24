<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <form method = "post"> 
        <label for="nome"> Informe a data: </label>
        <input type="date" id="data" name="data" placeholder="dd-mm-aaaa"> 
        <br>
        <label> <?php if ($_POST)   {
            $data = $_POST["data"];

            $separ = explode("-", $data);   

            $Y = $separ[0];
            $m = $separ[1];
            $d = $separ[2];

            if (checkdate($m,$d,$Y)) {
                echo date("$d/$m/$Y"); 
            }
            else {echo "Data inválida!!";}
        }
        ?> </label>
        <br>
        <br>
        <button type="submit"> Enviar </button>
    </form>
    
</body>
</html>