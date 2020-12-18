<?php

require "Connection.php";

class Produto
{

    public static function getAll()
    {
        $connection = Connection::getDb();

        $stmt = $connection->query("SELECT * FROM produtos");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        //return $stmt->fetch_all(MYSQLI_ASSOC);

    }

}
