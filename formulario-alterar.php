<?php

$titulo_pagina = "Formulário das Revistas (alteração)";
require "cabecalho.php";

require "conexao.php";

$id = filter_input(INPUT_GET, "id");

if(empty($id)){
    ?>
    <div class="alert alert-danger" role="alert">
        <h4> Falha ao abrir formulário para edição. </h4>
        <p> ID de pessoa está vazio. </p>
    </div>
<?php
    exit;
}

$sql = "select id, nome, editora, area, issn FROM revistas where ID = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$id]);

$revistas = $stmt->fetch();
?>

<!--<script>
    function imagePreview(valor) {

        var img = document.getElementById('img-preview');

        if(valor) {
            img.setAttribute('src', valor);
            img.style.display = 'inline';
        }else{
            img.style.display = 'none';
        }
    }
</script>-->

<form action="alterar-revistas.php" method="POST">

    <input type="hidden" name="id" value="<?= $id ?>" required>

    <div class="row">
        <div class="col-8">
            <div class="mb-3">
                <label for="nome" class="form-label"> Nome: </label>
                <input type="text" class="form-control" id="nome" name="nome" 
                value="<?=$revistas['nome']?>" required>
            </div>
            <div class="mb-3">
                <label for="editora" class="form-label"> Editora: </label>
                <input type="text" class="form-control" id="editora" name="editora"
                aria-describedby="posterHelp" 
                value="<?=$revistas['editora']?>" required>
                <div id="posterHelp" class="form-text">
                    Editora da Revista
                </div>
            </div>
            <div class="mb-3">
                <label for="area" class="form-label"> Área de Conhecimento: </label>
                <input type="text" class="form-control" id="area" name="area" 
                value="<?=$revistas['area']?>" required>
            </div>
            <div class="mb-3">
                <label class="form label" for="sobre"> ISSN: </label>
                <textarea class="form-control" name="issn" id="issn"><?=$revistas['issn']?></textarea>
            </div>
        </div>
    </div>


<button type="submit" class="btn btn-secondary"> Gravar </button>
<button type="reset" class="btn btn-warning"> Cancelar </button>


  
</form>
<?php

require "rodape.php";

?>