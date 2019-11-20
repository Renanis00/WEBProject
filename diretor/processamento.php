<?php

include_once 'diretor.php';

$diretor = new Diretor();

switch ($_GET['acao']){
    case 'salvar':
        if(empty($_POST['id_diretor'])){
            $diretor->inserir($_POST);
        } else {
            $diretor->alterar($_POST);
        }
        break;
    case 'deletar':
        $diretor->deletar($_GET['id_diretor']);
        break;
}

header('location: index.php');