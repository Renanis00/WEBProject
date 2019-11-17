<?php

include_once 'ator.php';

$ator = new Ator();

switch ($_GET['acao']){
    case 'salvar':
        if(empty($_POST['id_ator'])){
            $ator->inserir($_POST);
        } else {
            $ator->alterar($_POST);
        }
        break;
    case 'deletar':
        $ator->deletar($_GET['id_ator']);
        break;
}

header('location: index.php');