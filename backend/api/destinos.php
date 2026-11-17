<?php
// Todas as respostas deste endpoint serão JSON
header("Content-Type: application/json; charset=utf-8");
// Carrega a conexão e o Controller
require_once __DIR__ . "/../config/conexao.php";
require_once __DIR__ . "/../controllers/DestinoController.php";
// Cria o Controller
$controller = new DestinoController($conexao);
// Recupera o id enviado pela URL, se existir
$id = $_GET["id"] ?? null;
// Sem id, lista todos os destinos
if ($id === null) {
    $controller->listar();
    exit;
}
// O id deve conter apenas números
if (!ctype_digit($id)) {
    http_response_code(400);
    echo json_encode(
        ["erro" => "ID inválido"],
        JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
    );
    exit;
}
// Consulta um destino específico
$controller->buscar((int) $id);
