<?php

include 'verify_session.php';
include 'database.php';

$nome_completo = '';
$nome_usuario = '';
$email = '';
$senha = '';
$data_nascimento = '';
$estado = '';

$conexao = createConnection();

$id = $_SESSION["user_id"];

$query = sprintf("SELECT * FROM users WHERE id=%d", $id);

$result = mysqli_query($conexao, $query);

if(mysqli_num_rows($result) > 0) 
{
    $row = $result->fetch_assoc();
    $nome_completo = $row["fullname"];
    $nome_usuario = $row["username"];
    $email = $row["email"];
    $senha = $row["senha"];
    $data_nascimento = $row["data_nascimento"];
    $estado = $row["estado"];
}

if($_SERVER['REQUEST_METHOD'] == "GET")
  if(!empty($_GET['nome']))
  {
    $nome_completo = $_GET['nome'];
  }
  if(!empty($_GET['user']))
  {
    $nome_usuario = $_GET['user'];
  }
  if(!empty($_GET['email']))
  {
    $email = $_GET['email'];
  }
  if(!empty($_GET['senha']))
  {
    $senha = $_GET['senha'];
  }
  if(!empty($_GET['nascimento']))
  {
    $data_nascimento = $_GET['nascimento'];
  }
  if(!empty($_GET['estado']))
  {
    $estado = $_GET['estado'];
  }

  if(!empty($_GET['estado']) || !empty($_GET['nascimento']) || !empty($_GET['senha']) || !empty($_GET['email']) || !empty($_GET['user']) || !empty($_GET['nome']))
  {
      $query=sprintf("UPDATE users SET username='%s', fullname='%s', email='%s', senha='%s', data_nascimento='%s', estado='%s' WHERE id=%d;",
      $conexao->real_escape_string($nome_usuario),
      $conexao->real_escape_string($nome_completo),
      $conexao->real_escape_string($email),
      $conexao->real_escape_string($senha),
      $conexao->real_escape_string($data_nascimento),
      $conexao->real_escape_string($estado),
      $id
    );

    $result = $conexao->query($query);
  }

?>