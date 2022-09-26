<?php

$titulo_pagina = "Formulário das Revistas";
require "cabecalho.php";

?>

<style>
    .btn {
        align: center;
    }
</style>

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
</script> -->

<form action="inserir-revistas.php" method="POST">
    <div class="row">
        <div class="col-8">
            <div class="mb-3">
                <label for="nome" class="form-label"> Nome: </label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="mb-3">
                <label for="editora" class="form-label"> Editora: </label>
                <input type="text" class="form-control" id="editora" name="editora"
                aria-describedby="posterHelp" required>
                <div id="posterHelp" class="form-text">
                    Editora da Revista
                </div>
            </div>
            <div class="mb-3">
                <label for="area" class="form-label"> Área de Conhecimento: </label>
                <input type="text" class="form-control" id="area" name="area" required>
            </div>
            <div class="mb-3">
                <label class="form label" for="sobre"> ISSN: </label>
                <textarea class="form-control" name="issn" id="issn"> </textarea>
            </div>
        </div>
    </div>


    <button type="submit" class="btn btn-secondary"> Gravar </button>
    <button type="reset" class="btn btn-warning"> Cancelar </button>


  
</form>
<?php

require "rodape.php";

?>