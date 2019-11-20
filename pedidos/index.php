<?php

include_once 'pedidos.php';

$pedidos = Pedido::recuperarTodos();

include_once '../cabecalho.php';
?>

    <div class="row">
    	<div class="col-md-12">

    		<div class="box box-danger">
    			<div class="box-header with-border">
    				<h3 class="box-title">Sugestões</h3>
    			</div>
    			<div class="box-body">
    				<div class="row">
    					<div class="col-md-12">
                            <a class="btn btn-warning" href="formulario.php">Novo</a>

                            <table class="table table-bordered table-striped table-hover datatable">
                                <tr>
                                    <td>ID</td>
                                    <td>Título 1</td>
                                    <td>Título 2</td>
                                    <td>Título 3</td>
                                    
                                    
                                </tr>
                                <?php
                                foreach ($pedidos as $pedido) {
                                    echo "
                <tr>
                    <td>
                        <a class='trash' href='processamento.php?acao=deletar&id_pedido={$pedidos['id_pedido']}'><scan class='fa fa-trash'></scan></a>
                        <a href='formulario.php?id_pedido={$pedidos['id_pedido']}'><scan class='fa fa-edit'></scan></a>
                    </td>
                    <td>{$pedidos['id_pedido']}</td>
                    <td>{$pedidos['titulo1']}</td>
                    <td>{$pedidos['titulo2']}</td>
                    <td>{$pedidos['titulo3']}</td>
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