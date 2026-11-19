<?php 
$valor1 = $_POST["valor1"];
$valor2 = $_POST["valor2"];

if ($valor1 == $valor2){
    echo "Numeros iguais: $valor1";
}
else if ($valor1 < $valor2){
    echo "Sequencia crescente: $valor1, $valor2";
}
else{
    echo "Sequencia crescente: $valor2, $valor1";
}