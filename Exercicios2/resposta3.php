<?php 
$valor1= $_POST["valor1"];

if ($valor1 > 100){
    $soma = $valor1 - ($valor1 * 0.15);

    echo "<h2>Com desconto: $soma</h2>";
}
else{
   echo "<h1>SEM DESCONTOS PARA VOCE HAHAHAHAAHHAHAHAHAHAHAHHAHAHAH</h1>"; 
}