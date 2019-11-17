<?php

include_once 'filmes.php';

$filmes = Filmes::recuperarTodos();

include_once '../cabecalho.php';
?>

    <div class="row">
    	<div class="col-md-12">

    		<div class="box box-danger">
    			<div class="box-header with-border">
    				<h3 class="box-title">Filmes</h3>
    			</div>
    			<div class="box-body">
    				<div class="row">
    					<div class="col-md-12">
                            <a class="btn btn-warning" href="formulario.php">Novo</a>

                            <table class="table table-bordered table-striped table-hover datatable">
                                <tr>
                                    <td>Ações</td>
                                    <td>ID</td>
                                    <td>Título</td>
                                    <td>Ano de lançamento</td>
                                    <td>Estudio</td>
                                    <td>Gênero</td>
                                    <td>Classificação</td>

                                </tr>
                                <?php
                                foreach ($filmes as $filme) {
                                    // print_r($funcionario);
                                    // die;
                                    echo "
                <tr>
                    <td>
                        <a class='trash' href='processamento.php?acao=deletar&id_filme={$filme['id_filme']}'><scan class='fa fa-trash'></scan></a>
                        <a href='formulario.php?id_filme={$filme['id_filme']}'><scan class='fa fa-edit'></scan></a>
                    </td>
                    <td>{$filme['id_filme']}</td>
                    <td>{$filme['nome_filme']}</td>
                    <td>{$filme['ano_filme']}</td>
                    <td>{$filme['estudio_filme']}</td>
                    <td>{$filme['genero_filme']}</td>
                    <td>{$filme['classif_filme']}</td>
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

<?php include_once '../rodape.php'; ?>