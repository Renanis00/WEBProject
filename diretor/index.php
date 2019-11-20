<?php

include_once 'diretor.php';

$diretores = Diretor::recuperarTodos();

include_once '../cabecalho.php';
?>

    <div class="row">
    	<div class="col-md-12">

    		<div class="box box-danger">
    			<div class="box-header with-border">
    				<h3 class="box-title">$Diretores</h3>
    			</div>
    			<div class="box-body">
    				<div class="row">
    					<div class="col-md-12">
                            <a class="btn btn-warning" href="formulario.php">Novo</a>

                            <table class="table table-bordered table-striped table-hover datatable">
                                <tr>
                                    <td>Ações</td>
                                    <td>ID</td>
                                    <td>Diretor</td>
                                    <td>Filme</td>
                                    
                                </tr>
                                <?php
                                foreach ($diretores as $diretor) {
                                    echo "
                <tr>
                    <td>
                        <a class='trash' href='processamento.php?acao=deletar&id_diretor={$diretor['id_diretor']}'><scan class='fa fa-trash'></scan></a>
                        <a href='formulario.php?id_diretor={$diretor['id_diretor']}'><scan class='fa fa-edit'></scan></a>
                    </td>
                    <td>{$diretor['id_diretor']}</td>
                    <td>{$diretor['diretor']}</td>
                    <td>{$diretor['titulo']}</td>
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