<?php

if(!empty($_GET["nome"]) && !empty($_GET["nome_usuario"]) && !empty($_GET["email"]) && !empty($_GET["senha"]) && !empty($_GET["data_nascimento"]))
{
    $nome_completo = $_GET["nome"];
    $nome_usuario = $_GET["nome_usuario"];
    $email = $_GET["email"];
    $senha = $_GET["senha"];
    $data_nascimento = $_GET["data_nascimento"];
    $estado = $_GET["estado"];

    $hostname = "localhost";
    $database = "db_animego";
    $password = ""; 
    $user = "root";

    $conexao = new mysqli($hostname, $user, $password, $database);

    $query = sprintf("INSERT INTO users (username, fullname, email, senha, data_nascimento, estado) VALUES ('%s','%s','%s','%s','%s','%s')",
    $conexao->real_escape_string($nome_usuario),
    $conexao->real_escape_string($nome_completo),
    $conexao->real_escape_string($email),
    $conexao->real_escape_string($senha),
    $conexao->real_escape_string($data_nascimento),
    $conexao->real_escape_string($estado)
);
    $res = mysqli_query($conexao, $query);
}



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/login-cadastro.css">
    <title>Cadastro - Anime.Go</title>
</head>
<body>
    <div class="fundo-cadastro">
        <div class="navbar">
            <div class="logo"><img src="assets/css/imagens/anime-logo.png" alt=""></div>
            <ul>
                <li><a href="../index.php">Login</a></li>
                <li><a href="cadastro.php">Inscreva-se</a></li>
                
        </div>
    </div>

    <div id="tela-cadastro">

        <div class="titulo-caixa-cadastro"><h1>Cadastro Anime.Go</h1></div><br>
        
        <form action="cadastro.php">
            <div class="nome-completo">Nome Completo</div>
                <input class="input-tela-cadastro" type="text" name="nome" placeholder="Nome completo" required> 
                <br><br>

            <div class="nome-de-usuario">Nome de Usuário</div>
                <input  class="input-tela-cadastro" type="text" id="nome_usuario" name="nome_usuario" placeholder="Nome de Usuário" required> 
                <br><br>

            <div class="email-usuário">Email</div>
                <input  class="input-tela-cadastro" type="text" id="email" name="email" placeholder="Email" required>
            <br><br>

            <div class="senha-usuario">Senha <br></div>
                <input class="input-senha-cadastro" type="password" id="senha" name="senha" placeholder="Senha" required><br><br>
            
            <div class="data-nasc" >
                Data de Nascimento: 
                <input type="date" name="data_nascimento" name="data_nascimento" required>   
            </div> <br>

            <div class="estado-usuario">Estado <br></div>
                <input class="input-senha-cadastro" type="text" id="estado" name="estado" placeholder="Estado" required><br><br>
            
            <input class="botao-tela-cadastro" type="submit" name="submit" id="submit" href="home.html">
            <br>
            <hr>
    
            <div class="logar">
                <p>Já tem uma conta? <a style="color: white;" href="../index.php"> Entrar no Anime.Go</a> </p>
            </div>
    
    
        </form>
    </div>

    
</body>
</html>