<?php 
$valor = $_POST["valor"]; 

for ($i = 1; $i <= 10; $i++){
    $soma = $valor * $i;
    echo "$valor X $i = $soma<br>";
}
