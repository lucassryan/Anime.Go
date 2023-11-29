<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="navigation/assets/css/login-cadastro.css">
    <title>Login - Anime.Go</title>
</head>
<body>
    <div class="fundo-login">
        <div class="navbar">
            <div class="logo"><img src="assets/css/imagens/anime-logo.png" alt=""></div>
            <ul>
                <li><a href="navigation/cadastro.php">Inscreva-se</a></li>  
        </div>
    </div>

    <div id="navbar">

        <div class="titulo-navbar"><h1>Anime.Go</h1></div>
        
        <ul type="none" >
            <li class="inscrevase-navbar"><a style="color: white; text-decoration: none;" href="navigation/cadastro.html">Inscreva-se</a></li>
        </ul>

    </div>

    <div id="tela-login">

        <form action="navigation/login.php">

            <h1 class="titulo-login">Entrar no Anime.Go</h1>
            <br>

            <div class="email-login">E-mail </div>
                <input class="input-tela-login" type="text" id="email" name="email" placeholder="E-mail">
                <br><br>

            <div class="senha-login">Senha</div>
                <input class="input-tela-login" type="password" id="senha" name="senha" placeholder="Senha">
                <br><br>

            <input class="botao-tela-login" type="submit" ></input>
            <br><br>
            <hr>

            <div class="inscrevase">
                <p>Não tem uma conta? <a style="color: white;" href="navigation/cadastro.php"> Inscrever-se no Anime.Go</a> </p>
            </div>

        </form>

    </div>
</body>
</html>