<?php

require "Connection.php";

class Produto
{

    public static function getAll()
    {
        $connection = Connection::getDb();

        $stmt = $connection->query("SELECT * FROM produtos");
        return $stmt;//->fetchAll(mysqli_connect::FETCH_ASSOC);
    }

}