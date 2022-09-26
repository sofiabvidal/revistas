<?php

$titulo_pagina = "Alterar Revistas";
require "cabecalho.php";

require "conexao.php";

$id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
$editora = filter_input(INPUT_POST, "editora", FILTER_SANITIZE_SPECIAL_CHARS);
$area = filter_input(INPUT_POST, "area", FILTER_SANITIZE_SPECIAL_CHARS);
$issn = filter_input(INPUT_POST, "issn", FILTER_SANITIZE_SPECIAL_CHARS);

echo "<p> ID: $id </p>";
echo "<p> Nome: $nome </p>";
echo "<p> Editora: $editora </p>";
echo "<p> Área de Conhecimento: $area </p>";
echo "<p> ISSN: $issn </p>";

$sql = "update revistas set 
                nome = ?,
                editora = ?,
                area = ?,
                issn = ?
                where id = ?";

$stmt = $conn->prepare($sql);
$result = $stmt->execute([$nome, $editora, $area, $issn, $id]);

if ($result == true) {
?>
    <div class="alert alert-sucess" role="alert">
        <h4> Dados alterados com sucesso! </h4>
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