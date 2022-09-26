<?php

$titulo_pagina = "Revistas Científicas";
require "cabecalho.php";

echo "<p> URL atual: <b>".$_SERVER["PHP_SELF"]."</b><p>";
echo "<p> Nome da página atual: <b>". basename($_SERVER["PHP_SELF"])."</b><p>";

?>

<p> Venha conhecer revistas científicas! </p>

<?php

require "rodape.php";

?>