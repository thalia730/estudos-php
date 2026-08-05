<?php
if (isset($_GET['nome_produto'])) {
    $termo = $_GET['nome_produto'];
    echo "<h1>Você pesquisou por: " . $termo . "</h1>";
    echo '<br><a href="index.php">Voltar para a busca</a>';
    exit;
}
?>