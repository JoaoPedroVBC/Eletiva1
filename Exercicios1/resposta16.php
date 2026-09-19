<?php 
$valor1= $_POST["valor1"];
$valor2= $_POST["valor2"]/100;
$valor3= $_POST["valor3"];

$soma = $valor1 + (($valor1*$valor2) * $valor3);

echo "Resultado: $soma";