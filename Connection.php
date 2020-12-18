<?php

class Connection
{
    public static function getDb()
    {
        echo "<h1>Teste</h1>";
        $conn = new PDO(
            "mysql:host=192.168.0.41;dbname=fullstackgames",
            "kaique",
            "12345"
        );

        if ($conn) {
            return $conn;
        } else {
            echo "<h1>Erro ao realizar conexão</h1>";
        }
    }
}