<?php

include_once 'generos.php';

$genero = new Genero();

switch ($_GET['acao']){
    case 'salvar':
        if(empty($_POST['id_genero'])){
            $genero->inserir($_POST);
        } else {
            $genero->alterar($_POST);
        }
        break;
    case 'deletar':
        $genero->deletar($_GET['id_genero']);
        break;
}

header('location: index.php');