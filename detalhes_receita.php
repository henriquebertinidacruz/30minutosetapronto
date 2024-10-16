<?php
$categoria = isset($_GET['categoria']) ? $_GET['categoria'] : '';
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$json_file = "receitas/$categoria.json";

if (!file_exists($json_file)) {
    echo "Categoria ou receita não encontrada.";
    exit;
}

$receitas = json_decode(file_get_contents($json_file), true);

$receita_detalhes = null;
foreach ($receitas as $receita) {
    if ($receita['id'] == $id) {
        $receita_detalhes = $receita;
        break;
    }
}

if (!$receita_detalhes) {
    echo "Receita não encontrada.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $receita_detalhes['titulo']; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <header>
        <h1><?php echo $receita_detalhes['titulo']; ?></h1>
    </header>

    <div class="receita-detalhe">
        <img src="<?php echo $receita_detalhes['imagem_url']; ?>" alt="<?php echo $receita_detalhes['titulo']; ?>">
        <p><?php echo $receita_detalhes['descricao']; ?></p>
    </div>

    <a href="receitas_categoria.php?categoria=<?php echo $categoria; ?>" class="btn-voltar">Voltar para a Categoria</a>

</body>

</html>
