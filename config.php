<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = 'Epaine!7';
$dbName = 'biblioteca';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

/*
 
Teste de conexão simples.

if ($conexao->connect_errno) {
    echo "Erro";
}
else {
    echo "Conexão efetuada com sucesso!";
}

*/

?>