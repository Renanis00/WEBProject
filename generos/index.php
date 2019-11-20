<?php

include_once 'generos.php';

$generos = Genero::recuperarTodos();

include_once '../cabecalho.php';
?>

    <div class="row">
    	<div class="col-md-12">

    		<div class="box box-danger">
    			<div class="box-header with-border">
    				<h3 class="box-title">Gêneros</h3>
    			</div>
    			<div class="box-body">
    				<div class="row">
    					<div class="col-md-12">
                            <a class="btn btn-warning" href="formulario.php">Novo</a>

                            <table class="table table-bordered table-striped table-hover datatable">
                                <tr>
                                    <td>Ações</td>
                                    <td>ID</td>
                                    <td>Gênero</td>
                                    
                                </tr>
                                <?php
                                foreach ($generos as $genero) {
                                    echo "
                <tr>
                    <td>
                        <a class='trash' href='processamento.php?acao=deletar&id_genero={$genero['id_genero']}'><scan class='fa fa-trash'></scan></a>
                        <a href='formulario.php?id_genero={$genero['id_genero']}'><scan class='fa fa-edit'></scan></a>
                    </td>
                    <td>{$genero['id_genero']}</td>
                    <td>{$genero['genero']}</td>
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