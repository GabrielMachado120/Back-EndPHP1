<form method="GET" action="post_get_mesma_pagina.php">
    Cor: <br>
    <input type="text" name="cor" value=""> <br>
    Tipo: <br>
    <input type="text" name="tipo" value="">
    <input type="submit" value="Cadastrar">
</form>

<?php 
    $cor = $_GET['cor'] ?? "";
    $tipo = $_GET['tipo'] ?? "";
    $produto = $_GET['produto'] ?? "(Não selecionado)";
    if (isset($_POST['cor'])){
        //empty retorna null caso a variável exista
        //isset retorna false se não existir e TRUE se existir
        echo"A cor do produto $produto é $cor do tipo $tipo";
        }
?>