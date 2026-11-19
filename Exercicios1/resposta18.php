<?php       
$valor1= $_POST["valor1"];

$hora = $valor1*24;
$minuto = $hora*60;
$segundo = $minuto*60;

echo "Seus valores em horas: $hora<br>Minutos: $minuto<br>Segundos: $segundo";