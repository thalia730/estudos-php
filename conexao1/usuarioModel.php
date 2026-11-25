<?php
class usuarioModel {
    private $db;

    public function __construct($conexao) {
        $this->db = $conexao;
    }

    public function buscarPorId($id) {
        // 1. PREPARE: O SQL vai com um '?' (o marcador de posição)
        $sql = "SELECT * FROM usuario WHERE id =" . $id;
        $stmt = $this->db->query($sql);

        return $stmt->fetch();
    }
}