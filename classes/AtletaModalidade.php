<?php

require_once 'Atleta.php';
require_once 'Modalidade.php';
require_once '../includes/db.php';

class AtletaModalidade {
    private $conn;

    public function __construct(mysqli $conn) {
        $this->conn = $conn;
    }

    // insere e vincula um atleta a uma modalidade
    public function vincular(int $id_atleta, int $id_modalidade): bool {
        $stmt = $this->conn->prepare("INSERT INTO atleta_modalidade (cod_atleta, cod_modalidade) VALUES (?, ?)");
        $stmt->bind_param("ii", $id_atleta, $id_modalidade);
        return $stmt->execute();
    }
}
