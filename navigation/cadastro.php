<?php

include 'database.php';

if(!empty($_GET["nome"]) && !empty($_GET["nome_usuario"]) && !empty($_GET["email"]) && !empty($_GET["senha"]) && !empty($_GET["data_nascimento"]))
{
    $nome_completo = $_GET["nome"];
    $nome_usuario = $_GET["nome_usuario"];
    $email = $_GET["email"];
    $senha = $_GET["senha"];
    $data_nascimento = $_GET["data_nascimento"];
    $estado = $_GET["estado"];

    $conexao = createConnection();

    $query = sprintf("INSERT INTO users (username, fullname, email, senha, data_nascimento, estado) VALUES ('%s','%s','%s','%s','%s','%s')",
    $conexao->real_escape_string($nome_usuario),
    $conexao->real_escape_string($nome_completo),
    $conexao->real_escape_string($email),
    $conexao->real_escape_string($senha),
    $conexao->real_escape_string($data_nascimento),
    $conexao->real_escape_string($estado)
);
    $res = mysqli_query($conexao, $query);

    if($res==true)
    {
        print "<script>alert('Cadastro realizado com sucesso');</script>";
        print "<script>location.href='../index.html';</script>";
    }else
    {
        print "<script>alert('Não foi possível realizar seu cadastro. Tente novamente mais tarde.');</script>";
        print "<script>location.href='cadastro.html';</script>";
    }
    


}

?>