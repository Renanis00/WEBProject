<?php

include_once 'filmes.php';

$filme = new Filmes();

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