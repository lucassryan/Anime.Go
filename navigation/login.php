<?php

include 'database.php';

session_start();

$_SESSION['logged'] = false;

if($_SERVER["REQUEST_METHOD"] == "GET")
{
    if(!empty($_GET["email"]) && !empty($_GET["senha"]))
    {
        $email = $_GET["email"];
        $senha = $_GET["senha"];

        $conexao = createConnection();

        $result = $conexao->query("SELECT id, username FROM users WHERE email LIKE '".$email."' AND senha lIKE '".$senha."'");

        if($result->num_rows < 1)
        {
            die("Senha ou e-mail inválidos.");
        }
        else
        {
            $row = $result->fetch_assoc();
            print_r($row);
            $id = $row['id'];
            $_SESSION['user_id'] = $id;
            $_SESSION['logged'] = true;
            header("Location: home.html");
        }

        if($conexao->connect_error)
        {
            die("Conexão falhou...");
        }

    }
    else 
    {
        die("Preencha suas credenciais");
    }
}

?>