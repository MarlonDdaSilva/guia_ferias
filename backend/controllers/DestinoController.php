<?php
// Carrega a classe Destino
require_once __DIR__ . "/../models/Destino.php";
class DestinoController
{
    private $destino;
    public function __construct($conexao)
    {
        // Cria o Model e fornece a conexão com o banco
        $this->destino = new Destino($conexao);
    }
    public function listar()
    {
        // Solicita todos os destinos ao Model
        $destinos = $this->destino->listar();
        echo json_encode(
            $destinos,
            JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
        );
    }
    public function buscar($id)
    {
        // Solicita ao Model um destino específico
        $destino = $this->destino->buscarPorId($id);
        if ($destino === null) {
            http_response_code(404);
            echo json_encode(
                ["erro" => "Destino não encontrado"],
                JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
            );
            return;
        }
        echo json_encode(
            $destino,
            JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
        );
    }
}
