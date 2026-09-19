<?php
$valor1 = $_POST["valor1"];
$valor2 = $_POST["valor2"];
$desc = $valor2/100;

$soma = $valor1 - ($valor1 * $desc);

echo "Valor final: $soma";