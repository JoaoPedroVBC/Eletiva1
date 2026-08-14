<?php 
    $valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"];
    $valor3 = $_POST["valor3"];
    $soma = $valor1 + $valor2 + $valor3;
    $media = $soma/3;
    echo "O VALOR É: $soma E A MEDIA É: $media";
