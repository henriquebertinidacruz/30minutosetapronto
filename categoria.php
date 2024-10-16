<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-adsense-account" content="ca-pub-5366925451253603">
    <title>Receitas da Categoria</title>
    <link rel="stylesheet" href="styles_categorias.css">
    <link rel="icon" type="image/png" href="images/logo.ico">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5366925451253603"
        crossorigin="anonymous"></script>
    <script charset="UTF-8" src="https://cdn.sendwebpush.com/sendwebpush/client_services/670182feefa9a.js"
        async></script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement(
                {
                    pageLanguage: 'pt',
                    includedLanguages: 'en,pt,fr,zh-CN,de,cs',
                    layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                },
                'google_translate_element'
            );
        }
    </script>
    <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</head>

<body>

    <header>
        <div class="header-container">
            <a href="index.html">
                <img src="images/logo.png" alt="Logo 30minutosetapronto" class="logo">
            </a>
            <h1 class="categoria-nome">
                <?php echo ucfirst(str_replace('_', ' ', $categoria)); ?>
            </h1>
        </div>
        <div id="google_translate_element"></div>
        <div class="language-selector">
        </div>
    </header>

    <div class="receitas-container">
        <?php foreach ($receitas_pagina as $index => $receita): ?>
        <div class="receita-item">
            <img src="<?php echo $receita['imagem_url']; ?>" alt="<?php echo $receita['titulo']; ?>">
            <h2>
                <?php echo $receita['titulo']; ?>
            </h2>
            <p>
                <?php echo $receita['descricao']; ?>
            </p>

            <button class="btn-visualizar" onclick="toggleDetalhes(this)">Visualizar Mais</button>

            <div class="detalhes-receita" style="display: none;">
                <h3>Ingredientes</h3>
                <ul>
                    <?php foreach ($receita['ingredientes'] as $ingrediente): ?>
                    <li>
                        <?php echo $ingrediente; ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <h3>Modo de Preparo</h3>
                <ol>
                    <?php foreach ($receita['modo_preparo'] as $passo): ?>
                    <li>
                        <?php echo $passo; ?>
                    </li>
                    <?php endforeach; ?>
                </ol>
                <p class="autor-receita" style="color: #5C4033;">Por: Henrique Bertini</p>
            </div>
        </div>

        <?php if (($index + 1) % 3 == 0): ?>
        <div style="padding:30px">
            <div class="anuncio">
                <script async
                    src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5366925451253603"
                    crossorigin="anonymous"></script>
                <ins class="adsbygoogle" style="display:block;background-color:rgb(200,200,200); text-align:center;"
                    data-ad-layout="in-article" data-ad-format="fluid" data-ad-client="ca-pub-5366925451253603"
                    data-ad-slot="8656493527"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        </div>
        <?php endif; ?>
        <?php endforeach; ?>
    </div>

    <div style="padding:30px">
        <script async
            src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5366925451253603"
            crossorigin="anonymous"></script>
        <ins class="adsbygoogle" style="display:block;"
            data-ad-client="ca-pub-5366925451253603" data-ad-slot="6308761270" data-ad-format="auto"
            data-full-width-responsive="true"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>


        <div class="pagination">
            <?php for ($i = 1; $i <= $total_paginas; $i++): ?>
            <a href="receitas_categoria.php?categoria=<?php echo $categoria; ?>&pagina=<?php echo $i; ?>">
                <?php echo $i; ?>
            </a>
            <?php endfor; ?>
        </div>

        <script type="text/javascript">
            function toggleDetalhes(button) {
                var detalhes = button.nextElementSibling;
                if (detalhes.style.display === "none") {
                    detalhes.style.display = "block";
                    button.textContent = "Ocultar";
                } else {
                    detalhes.style.display = "none";
                    button.textContent = "Visualizar Mais";
                }
            }

            function translatePage(language) {
                var frame = document.querySelector('.goog-te-menu-frame');
                if (!frame) {
                    alert("Google Translate not loaded");
                    return;
                }
                frame.contentWindow.document.querySelector(`[lang="${language}"]`).click();
            }
        </script>
</body>
</html>