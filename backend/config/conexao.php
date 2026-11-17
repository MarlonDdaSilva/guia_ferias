<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "guia_ferias";
// Cria a conexão com o MySQL
$conexao = new mysqli(
    $host,
    $usuario,
    $senha,
    $banco
);
// Interrompe a execução se a conexão falhar
if ($conexao->connect_error) {
    die("Erro na conexão com o banco de dados.");
}
// Mantém os acentos corretamente
$conexao->set_charset("utf8mb4");
