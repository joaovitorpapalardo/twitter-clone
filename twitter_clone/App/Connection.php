<?php 

namespace App;

class Connection {

    public static function getDb() {
        try {

            $conn = new \PDO(
                "mysql:host=;dbname=;charset=", // Adicionar o nome do host, banco de dados e o charset
                "", // Adicionar nome do usuario do banco de dados
                "" // Adicionar senha de acesso do banco de dados
            );

            return $conn;

        } catch (\PDOException $e) {
            // Tratar o Erro
        }
    }
}

?>