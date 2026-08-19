<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    // criando função
        function media($n1, $n2, $n3)
        {
            
                // calcula da média
                $media = ($n1 + $n2 + $n3) / 3;
                
                echo "<h3> Cálculo da média </h3>";
                echo "<n>A média das notas: </n> <br>";
                echo "Nota 1: $n1 <br>Nota 2: $n2 <br>Nota 3: $n3 <br>";
                echo "A média é: " . $media;
            
        }
    if ($n1 != "" || $n2 != "" || $n3 != "") {
    // chamando a função
    media($n1, $n2, $n3);
    }
} else {
    echo "Nenhuma nota foi digitada";
}
?>  
