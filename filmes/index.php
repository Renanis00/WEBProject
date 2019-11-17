<?php

include_once 'filme.php';

$filmes = Filme::recuperarTodos();

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

                            <table class="table table-bordered table-striped table-hover datatable">
                                <tr>
                                    <td>Ações</td>
                                    <td>ID</td>
                                    <td>Título</td>
                                    <td>Data de lançamento</td>
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
                    <td>{$filme['nome_filme']}</td>
                    <td>{$filme['ano_filme']}</td>
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