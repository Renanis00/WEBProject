<?php

include_once 'classificacoes.php';

$classificacao = new Classificacao();

switch ($_GET['acao']){
    case 'salvar':
        if(empty($_POST['id_classificacao'])){
            $classificacao->inserir($_POST);
        } else {
            $classificacao->alterar($_POST);
        }
        break;
    case 'deletar':
        $classificacao->deletar($_GET['id_classificacao']);
        break;
}

header('location: index.php');