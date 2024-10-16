<?php
$categoria = isset($_GET['categoria']) ? $_GET['categoria'] : '';

$json_file = "receitas/$categoria.json";

if (!file_exists($json_file)) {
    echo "Categoria não encontrada.";
    exit;
}

$receitas = json_decode(file_get_contents($json_file), true);

$limite = 10;
$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$offset = ($pagina - 1) * $limite;

$receitas_pagina = array_slice($receitas, $offset, $limite);

$total_receitas = count($receitas);
$total_paginas = ceil($total_receitas / $limite);

include('categoria.php');
?>
