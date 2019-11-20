<?php

include_once 'estudios.php';

$estudio = new Estudio();

switch ($_GET['acao']){
    case 'salvar':
        if(empty($_POST['id_estudio'])){
            $estudio->inserir($_POST);
        } else {
            $estudio->alterar($_POST);
        }
        break;
    case 'deletar':
        $estudio->deletar($_GET['id_estudio']);
        break;
}

header('location: index.php');