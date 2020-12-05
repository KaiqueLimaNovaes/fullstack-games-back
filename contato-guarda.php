<?php

require "./Models/Contato.php";

$contato = new Contato;
$contato->nome = $_POST['nome'];
$contato->mensagem = $_POST['mensagem'];

$validate = $contato->registerContato();

if ($validate == true) {
    echo json_encode(true);
} else {
    echo json_encode(false);
}
