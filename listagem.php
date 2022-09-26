<?php

$titulo_pagina = "Listagem das Revistas";
require "cabecalho.php";

require "conexao.php";

$sql = "select id, nome, editora, area, issn FROM revistas order by id";
$stmt = $conn->query($sql);


?>

<div class="table-responsive">
    <table class="table table-striped ">
        <thead>
            <tr>

                <th scope="col" style="width: 10%;">ID</th>
                <th scope="col" style="width: 25%;">Nome</th>
                <th scope="col" style="width: 15%;">Editora</th>
                <th scope="col" style="width: 15%;">Área</th>
                <th scope="col" style="width: 25%;">ISSN</th>
                <th scope="col" style="width: 25%;" colspan="2"></th>

            </tr>
        </thead>
        <tbody>
            <?php
                while ($row = $stmt->fetch()) {
                ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['nome'] ?></td>
                <td>
                    <a href="<?= $row['editora'] ?>" target="_blank">
                        <?= $row['editora'] ?>
                    </a>
                </td>
                <td><?= $row['area'] ?></td>    
                <td><?= $row['issn'] ?></td>
                <td>

                    <a class="btn btn-sm btn-secondary" 
                    href="formulario-alterar.php?id=<?= $row['id']; ?>">
                        <span data-feather="edit"></span>

                        Editar
                    </a>
                </td>
                <td>
                    <a class="btn btn-sm btn-warning" 
                    href="excluir-revistas.php?id=<?= $row['id']; ?>"
                    onclick="if(!confirm('Tem certeza que deseja excluir?')) return false;">
                        <span data-feather="trash-2"> </span>
                        Excluir
                    </a>
                </td>
            </tr>

           

           
        <?php
                }
        ?>
        </tbody>
    </table>
</div>

<?php

require "rodape.php";

?>