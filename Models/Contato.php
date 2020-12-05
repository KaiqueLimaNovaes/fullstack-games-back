<?php

require "Connection.php";

class Contato
{
    public $id;
    public $nome;
    public $mensagem;

    public static function getAll()
    {
        $connection = Connection::getDb();

        $stmt = $connection->query("SELECT * FROM contato");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function registerContato()
    {
        $connection = Connection::getDb();

        $stmt = $connection->query("INSERT INTO contato (nome, mensagem) values ('$this->nome', '$this->mensagem')");
        
        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
