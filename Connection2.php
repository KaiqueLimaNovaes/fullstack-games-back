<?php
/*
$link = mysqli_connect("192.168.0.41", "root", "root", "fullstackgames");
 
if (!$link) {
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
 
echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL." . PHP_EOL;
 
mysqli_close($link);
*/

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

