<?php

$titulo_pagina = "Inserir Revista";
require "cabecalho.php";

require "conexao.php";
include "conexao.php";

$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
$editora = filter_input(INPUT_POST, "editora", FILTER_SANITIZE_SPECIAL_CHARS);
$area = filter_input(INPUT_POST, "area", FILTER_SANITIZE_SPECIAL_CHARS);
$issn = filter_input(INPUT_POST, "issn", FILTER_SANITIZE_SPECIAL_CHARS);

/** 
echo "<p> Nome: $nome </p>";
echo "<p> URL Foto: $urlfoto </p>";
echo "<p> Sobre Pessoa: $sobre </p>";
*/

$sql = "insert into revistas (nome, editora, area, issn) values (?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$result = $stmt->execute([$nome, $editora, $area, $issn]);

if ($result == true) {
?>
    <div class="alert alert-sucess" role="alert">
        <h4> Dados gravados com sucesso! </h4>
    </div>
<?php
} else {
?>
    <div class="alert alert-danger" role="alert">
        <h4> Falha ao efetuar a gravação. </h4>
        <p> <?php echo $stmt->error; ?> </p>
    </div>
<?php    
}

require "rodape.php";

?>