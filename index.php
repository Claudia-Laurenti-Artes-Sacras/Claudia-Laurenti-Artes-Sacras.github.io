<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">
    <title>Cláudia Laurenti - Artes Sacras</title>

    <link rel="stylesheet" href="./custom-style.css">
    <link rel="stylesheet" href="https://bootswatch.com/5/simplex/bootstrap.css">
    <link rel="stylesheet" href="https://bootswatch.com/_vendor/bootstrap-icons/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/_vendor/prismjs/themes/prism-okaidia.css">
    <link rel="stylesheet" href="https://bootswatch.com/_assets/css/custom.min.css">
</head>

<header>
    <nav class="navbar navbar-expand-lg bg-light" data-bs-theme="light">
        <div class="container-fluid">
            <img src="./img/logo-deitada.png" id="logo-cabeçalho" alt="logo-deitada">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor03">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#slider-wrapper">Redes Sociais
                            <span class="visually-hidden">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sobre-nos">Sobre nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#entre-em-contato">Entre em contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</header>

<body>

    <?php require_once 'slideshow.php'; ?>

    <div id="espacador"></div>

    <div id="wrapper-conteudo">

        <div id="sobre-nos">

            <h2>Sobre Nós</h2>

            <p>Somos um reflexo dos valores personificados por <b>Cláudia Laurenti</b>. Um exemplo de mulher forte: não apenas uma artista excepcional, mas também uma mãe de cinco filhos, pedagoga e educadora, fervorosa católica e uma dedicada artista com três décadas de experiência. <br> Sua paixão e devoção são evidentes em sua habilidade para criar imagens sacras <b>meticulosamente pintadas à mão</b> e na <b>restauração de preciosas peças antigas</b>.</p>

            <div id="espacador-texto"></div>

            <h3>Nossa Missão</h3>

            <p>Nossa missão é clara: <b>Buscamos trazer os oratórios de volta aos lares!</b>
            
            <br>Procuramos trazer a beleza e o significado das imagens sacras de volta aos lares católicos. Nosso objetivo é inspirar a devoção e a espiritualidade, permitindo que as famílias alimentem suas devoções em seus lares.</p>

            <div id="espacador-texto"></div>

            <h3>Arte Sacra e o Esplendor do Barroco</h3>

            <p> Abraçamos a tradição do Barroco - a época de maior esplendor artístico e espiritualidade na história. Escolhemos a pintura à mão como nosso método preferido por acreditamos que é assim que cada criação se transforma em uma obra de arte única. <b>Cada pincelada é cuidadosamente aplicada</b>, permitindo que cada detalhe seja observado e apreciado.</p>

            <p>Optamos também pela utilização do gesso, um material que ocupa uma posição de destaque na hierarquia de qualidade, sendo apenas superado pela madeira. O gesso oferece a durabilidade necessária e a capacidade de capturar a essência das figuras sacras que inspiraram gerações.</p>

            <p>A nossa dedicação à pintura à mão e à escolha cuidadosa dos vários detalhes que compõem a imagem reflete nosso compromisso em trazer à vida a beleza e a devoção da arte sacra de uma forma que é verdadeiramente excepcional e significativa.</p>

            <div id="espacador-texto"></div>

            <h3>Restauração com Dedicação</h3>

            <p>Também nos dedicamos à restauração de peças antigas e preciosas. Com respeito e cuidado, trabalhamos para devolver a beleza e a dignidade a imagens e objetos de devoção danificados pelo tempo ou pelo uso. Somos especialistas em preservar a autenticidade e a história dessas peças valiosas.</p>

            <div id="espacador-texto"></div>

            <h3>Experiência Única</h3>

            <p>Nossa empresa é construída com base na experiência singular de Cláudia Laurenti, acumulada ao longo de mais de três décadas. Essa herança de excelência e compromisso com a fé nos torna referência no mundo das artes sacras.</p>

        </div>

        <div id="espacador"></div>

        <h2>Fale conosco</h2>
        <div id="entre-em-contato" class="d-grid gap-2">
            <button class="btn btn-lg btn-custom" onclick="window.open('https://www.instagram.com/claudia_laurenti_artes_sacras/', '_blank');" type="button">
                <i class="fa-brands fa-instagram"></i> Instagram
            </button>

            <button class="btn btn-lg btn-custom" onclick="window.open('https://api.whatsapp.com/send?phone=556292926195', '_blank');" type="button">
                <i class="fa-brands fa-whatsapp"></i> WhatsApp
            </button>
            
        </div>
    </div>

    <div id="espacador"></div>

    <script src="https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://bootswatch.com/_vendor/prismjs/prism.js" data-manual></script>
    <script src="https://bootswatch.com/_assets/js/custom.js"></script>
    <script src="./custom-script.js"></script>
    <script src="https://kit.fontawesome.com/02eeda6330.js" crossorigin="anonymous"></script>
</body>

</html>
