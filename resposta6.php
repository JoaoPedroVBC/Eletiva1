<?php
$valor = $_POST["valor"];
echo "CONTANDO(while): ";

$contador = 1;

while ($contador <= $valor){
    echo "$contador ";
    $contador++;
}