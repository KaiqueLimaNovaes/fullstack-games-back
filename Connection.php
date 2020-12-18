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
        } else {
            echo "<h1>Erro ao realizar conexão</h1>";
        }
        
        /*
        $conn = mysqli_connect("192.168.0.41", "root", "root", "fullstackgames");
 
        if (!$conn) {
            echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
            echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }
        
        //echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL." . PHP_EOL;
        return $conn;
        
        mysqli_close($conn);
        */
    }
}