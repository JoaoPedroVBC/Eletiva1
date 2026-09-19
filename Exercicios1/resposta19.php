<?php
$valor1 = $_POST["valor1"]*1000;
$valor2 = $_POST["valor2"]*60;

$velm = (($valor1/$valor2)*60)/1000;

echo "Velocidade media de: $velm km/h";