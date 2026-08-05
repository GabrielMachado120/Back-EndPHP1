<?php
/* faça um código em que calcule a tabuada do número indicado em uma váriavel com o nome $tabuada,
aplique o laço de repetição FOR */
    $tabuada = $_GET["tabuada"];
    for ($i = 1; $i <= 10; $i++) {
        echo("$tabuada X $i = " . $tabuada * $i . "<br>");
    }
?>