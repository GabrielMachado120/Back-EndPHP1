<?php 
    $num = $_POST['n1'];
    function parOuImpar($num) {
        if ($num % 2 == 0) {
            return "Par";
        } else {
            return "Impar";
        }
    }
    echo "O número $num é: ".  parOuImpar($num);
?>