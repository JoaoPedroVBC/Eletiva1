<?php
$valor = $_POST["valor"];
echo "valor = $valor<br>"; 

for ($i = $valor-1; $i >= 1; $i--){
$valor = $valor * $i;

}
echo "Resultado: $valor";