<?php

require "Connection.php";

class Pedido
{
    public $cliente;
    public $endereco;
    public $telefone;
    public $produto;
    public $preco;
    public $quantidade;
    public $preco_total;

    public static function getAll()
    {
        $connection = Connection::getDb();

        $stmt = $connection->query("SELECT * FROM pedidos");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function guardaPedido()
    {
        $connection = Connection::getDb();

        $stmt = $connection->query("INSERT INTO pedidos (cliente, endereco, telefone, produto, preco, quantidade, preco_total) 
        values ('$this->cliente', '$this->endereco', '$this->telefone', '$this->produto', '$this->preco', '$this->quantidade', '$this->preco_total')");
        
        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
