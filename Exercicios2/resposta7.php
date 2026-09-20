<?php
$valor = $_POST["valor"];
echo "CONTANDO(DoWhile): ";

$contador = 1;

do {
    echo "$contador ";
    $contador++;
}while ($contador <= $valor);