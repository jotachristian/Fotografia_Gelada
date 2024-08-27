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
        <button id="openModal">Login</button>

        <main class="login">

            <div class="modal">
                <form action="" method="POST">
                    <h2 class="namelog">Login</h2>
                    <div id="email">
                        <label for="email">E-mail:</label><br>
                        <input type="email" id="email" placeholder="Digite seu e-mail" name="email" required>
                    </div>
                    <div id="senha">
                        <label for="senha">Senha:</label><br>
                        <input type="password" id="senha" placeholder="Digite sua senha" name="senha" required>
                    </div>
                    <div class="entra">
                        <input type="submit" value="Entrar">
                    </div>
                    <button class="fechar" onclick="onClose()">Cancelar</button>
                </form>
            </div>
        </main>

</header>
<nav>
    <a href="">Home</a>
</nav>

<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "<div id='centro'>Preencha seu e-mail</div>";
    } else if(strlen($_POST['senha']) == 0) {
        echo "<div id='centro'>Preencha sua senha</div>";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM login WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die('Falha na execução do código SQL: ');

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");


        } else {
            echo "<script>alert('Falha ao logar! E-mail ou senha incorretos');</script>";
        }

    }

}


?>

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

    <script src="./js/script.js"></script>
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