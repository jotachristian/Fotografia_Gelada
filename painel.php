<?php

include ('protect.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fotografia Gelada</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
</head>
<header>
    <div class="cont-logo">
        <h1 class="Logo">FOTOGRAFIA GELADA
        </h1>
        <div class="painel">
            <h4>Olá <?php echo $_SESSION['nome']; ?>, Bem-vindo de volta. <h4>
                    <p>
                        <a href="logout.php">Sair</a>
                    </p>

        </div>

        <!-- <main class="login">
        </main> -->

</header>
<nav>
    <a href="">Home</a>
</nav>

<body>
    <section id="galeria">
        <div id="colunaum">
            <img id="imagem1" src="./_img/Everest.jpg" alt="">
            <img id="imagem2" src="./_img/MonteFuji.jpg" alt="">
        </div>


        <div id="colunadois" class="like">
            <img id="imagem3" src="./_img/AlpesSuiços.jpg" alt="">
            <img id="imagem4" src="./_img/GrandCanyon.jpg" alt="">

        </div>


        <div id="colunatres">

            <img id="imagem5" src="./_img/MonteBranco.jpg" alt="">

            <img id="imagem6" src="./_img/MonteElbrus.jpg" alt="">

        </div>

        <div id="colunaquatro">


            <img id="imagem7" src="./_img/PicoPikes.jpg" alt="">

            <img id="imagem8" src="./_img/Huandoy.jpg" alt="">
        </div>

    </section>

    <script>
    $(function() {
        $('#like').on('click', function() {
            $(this).next('.likes').find('span').text(function() {
                if (parseInt($(this).text()) === 0) {
                    return parseInt($(this).text() + 1);
                } else {
                    return 0;
                }
            });
        });
    });
    </script>


</body>
<footer>
    <div class="container">
        <h2 class="Ft-logo">FOTOGRAFIA <br>GELADA</h2>
        <a href="https://x.com/?lang=pt-br" target="_blank">
            <img src="./_Icones/Twitter.svg" alt="Twitter">
        </a>
        <a href="https://www.instagram.com/" target="_blank">
            <img src="./_Icones/Instagram.svg" alt="Instagram">
        </a>
        <a href="https://www.youtube.com/?app=desktop&hl=pt" target="_blank">
            <img src="./_Icones/youtube.svg" alt="Youtube">
        </a>
        <a href="https://www.tiktok.com/login?lang=pt-BR&redirect_url=https%3A%2F%2Fwww.tiktok.com%2Fupload%3Flang%3Dpt-BR"
            target="_blank">
            <img src="./_Icones/tiktok.svg" alt="Tiktok">
        </a>

        <p>Copyright - 2024</p>
    </div>
</footer>

</html>