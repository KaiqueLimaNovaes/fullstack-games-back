<?php

require "./Models/Pedidos.php";

$pedido = new Pedido;
$pedido->cliente = $_POST['cliente'];
$pedido->endereco = $_POST['endereco'];
$pedido->telefone = $_POST['telefone'];
$pedido->produto = $_POST['produto'];
$pedido->preco = $_POST['preco'];
$pedido->quantidade = $_POST['quantidade'];
$pedido->preco_total = $_POST['preco_total'];

$validate = $pedido->guardaPedido();

if ($validate == true) {
    echo json_encode(true);
} else {
    echo json_encode(false);
}
