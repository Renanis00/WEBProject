<?php

include_once 'estudio.php';

$estudios = Estudio::recuperarTodos();

include_once '../cabecalho.php';
?>

    <div class="row">
    	<div class="col-md-12">

    		<div class="box box-danger">
    			<div class="box-header with-border">
    				<h3 class="box-title">Estúdio</h3>
    			</div>
    			<div class="box-body">
    				<div class="row">
    					<div class="col-md-12">
                            <a class="btn btn-warning" href="formulario.php">Novo</a>

                            <table class="table table-bordered table-striped table-hover datatable">
                                <tr>
                                    <td>Ações</td>
                                    <td>ID</td>
                                    <td>Estúdio</td>
                                    
                                </tr>
                                <?php
                                foreach ($estudios as $estudio) {
                                    echo "
                <tr>
                    <td>
                        <a class='trash' href='processamento.php?acao=deletar&id_estudio={$estudio['id_estudio']}'><scan class='fa fa-trash'></scan></a>
                        <a href='formulario.php?id_estudio={$estudio['id_estudio']}'><scan class='fa fa-edit'></scan></a>
                    </td>
                    <td>{$estudio['id_estudio']}</td>
                    <td>{$estudio['estudio']}</td>
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