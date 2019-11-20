<?php

include_once 'pedidos.php';

$pedido = new Pedido();

switch ($_GET['acao']){
    case 'salvar':
        if(empty($_POST['id_pedido'])){
            $pedido->inserir($_POST);
        } else {
            $pedido->alterar($_POST);
        }
        break;
    case 'deletar':
        $pedido->deletar($_GET['pedido']);
        break;
}

header('location: index.php');