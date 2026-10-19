<?php 
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$d = $_POST['d'];
$e = $_POST['e'];

$maior_valor = max($a, $b, $c, $d, $e); // retorna maior valor
$menor_valor = min($a, $b, $c, $d, $e);

echo "Valores comparados: $a, $b, $c, $d, $e : <br>";
echo "O maior valor é: $maior_valor e o menor valor é $menor_valor";
?>