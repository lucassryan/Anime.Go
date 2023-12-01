<?php

function createConnection() {
    $hostname = "localhost";
    $database = "db_animego";
    $password = ""; 
    $user = "root";
    $conexao = new mysqli($hostname, $user, $password, $database);
    return $conexao;
}

?>