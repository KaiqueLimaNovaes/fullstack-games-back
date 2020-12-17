<?php

class Connection
{
    public static function getDb()
    {
        $conn = new PDO(
            "mysql:host=192.168.0.39;dbname=fullstackgames;charset=utf8",
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