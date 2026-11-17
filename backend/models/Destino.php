<?php
class Destino
{
    private $conexao;
    public function __construct($conexao)
    {
        // Guarda a conexão recebida do Controller
        $this->conexao = $conexao;
    }
    public function listar()
    {
        // Consulta todos os destinos
        $sql = "SELECT * FROM destinos";
        $resultado = $this->conexao->query($sql);
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
    public function buscarPorId($id)
    {
        // Consulta preparada para buscar apenas um destino
        $stmt = $this->conexao->prepare(
            "SELECT * FROM destinos WHERE id = ?"
        );
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();
    }
}
