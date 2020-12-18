<?php

class Connection
{
    public static function getDb()
    {
        $conn = new PDO(
            "mysql:host=192.168.0.41;dbname=fullstackgames",
            "root",
            "root"
        );

        if ($conn) {
            return $conn;
            echo "<h1>Teste</h1>";
        } else {
            echo "<h1>Erro ao realizar conexão</h1>";
        }
    }
}