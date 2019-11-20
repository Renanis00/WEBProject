<?php

include_once 'filme.php';

$filmes = Filme::recuperarTodos();


if(!empty($_GET['id_genero'])){
    $filme->recuperarPorId($_GET['id_filme']);
}

include_once '../cabecalho.php';
?>

    <div class="row">
    	<div class="col-md-12">

    		<div class="box box-danger">
    			<div class="box-header with-border">
    				<h3 class="box-title">Filme</h3>
    			</div>
    			<div class="box-body">
    				<div class="row">
    					<div class="col-md-12">
                            <a class="btn btn-warning" href="formulario.php">Novo</a>

                            <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover datatable">
                                <tr>
                                    <td>Ações</td>
                                    <td>ID</td>
                                    <td>Título</td>
                                    <td>Data de lançamento</td>
                                    <td>Gênero</td>
                                    <td>Classificação</td>
                                    <td>Diretor</td>
                                    <td>Estudio</td>
                                    <td>Elenco</td>
                                </tr>
                                <?php
                                foreach ($filmes as $filme) {
                                    echo " 
                <tr>
                    <td>
                        <a class='trash' href='processamento.php?acao=deletar&id_filme={$filme['id_filme']}'><scan class='fa fa-trash'></scan></a>
                        <a href='formulario.php?id_cargo={$filme['id_filme']}'><scan class='fa fa-edit'></scan></a>
                    </td>
                    <td>{$filme['id_filme']}</td>
                    <td>{$filme['titulo']}</td>
                    <td>{$filme['data']}</td>
                    <td>{$filme['genero']}</td>
                    <td>{$filme['classificacao']}</td>
                    <td>{$filme['diretor']}</td>
                    <td>{$filme['estudio']}</td>
                    <td>{$filme['ator']}</td>
                </tr>
            ";
                                }
                                ?>
                            </table>
                            </div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>

<?php include_once '../rodape.php'; ?>