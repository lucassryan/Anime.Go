<?php

$hostname = "localhost";
$database = "db_animego";
$user = "root";
$password = "";

$conexao = new mysqli($hostname, $user, $password, $database);

if ($conexao->connect_errno) {
        echo "Falha ao conectar: (".$conexao->connect_errno.")" . $conexao->connect_error;
}

?>