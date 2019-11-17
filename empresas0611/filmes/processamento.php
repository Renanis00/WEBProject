<?php

include_once 'filme.php';

$filme = new Filme();

switch ($_GET['acao']){
    case 'salvar':
        if(empty($_POST['id_filme'])){
            $filme->inserir($_POST);
        } else {
            $filme->alterar($_POST);
        }
        break;
    case 'deletar':
        $filme->deletar($_GET['id_filme']);
        break;
}

header('location: index.php');