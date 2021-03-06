<?php

include_once 'ator.php';

$atores = Ator::recuperarTodos();

include_once '../cabecalho.php';
?>

    <div class="row">
    	<div class="col-md-12">

    		<div class="box box-danger">
    			<div class="box-header with-border">
    				<h3 class="box-title">Atores / Atrizes</h3>
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
                                    <td>Nome</td>
                                    <td>Filmes</td>
                                </tr>
                                <?php
                                foreach ($atores as $ator) {
                                    echo "
                <tr>
                    <td>
                    
                        <a class='trash' href='processamento.php?acao=deletar&id_ator={$ator['id_ator']}'><scan class='fa fa-trash'></scan></a>
                        <a href='formulario.php?id_ator={$ator['id_ator']}'><scan class='fa fa-edit'></scan></a>
                    </td>
                    <td>{$ator['id_ator']}</td>
                    <td>{$ator['ator']}</td>
                    <td>{$ator['titulo']}</td>
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