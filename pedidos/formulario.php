<?php
include_once 'pedidos.php';

$pedido = new Pedido();

if(!empty($_GET['id_pedido'])){
    $pedido->recuperarPorId($_GET['id_pedido']);
}


include_once '../cabecalho.php';
?>

    <div class="row">
    	<div class="col-md-12">

    		<div class="box box-danger">
    			<div class="box-header with-border">
    				<h3 class="box-title">Adicionar Sugestões</h3>
    			</div>
    			<div class="box-body">
    				<div class="row">
    					<div class="col-md-12">
                            <form action="processamento.php?acao=salvar" method="post">

                                <input type="hidden" name="id_pedido" id="id_pedido" value="<?php echo $pedido->getIdPedido(); ?>">

                                <div class="form-group row">    
                                    <div class="col-md-4 mb-3">
                                     <label for="titulo1">Título 1</label>
                                         <input type="text" class="form-control" name="titulo1" id="titulo1" placeholder="Sugestionar título1"  required value="<?php echo $pedido->getTitulo1(); ?>">
                                    </div>
                                 </div>
                                <div class="form-group row">    
                                    <div class="col-md-4 mb-3">
                                     <label for="titulo2">Título 2</label>
                                         <input type="text" class="form-control" name="titulo2" id="titulo2" placeholder="Sugestionar título2"  value="<?php echo $pedido->getTitulo2(); ?>">
                                    </div>
                                 </div>
                                <div class="form-group row">    
                                    <div class="col-md-4 mb-3">
                                     <label for="titulo3">Título 3</label>
                                         <input type="text" class="form-control" name="titulo3" id="titulo3" placeholder="Sugestionar título3"  value="<?php echo $pedido->getTitulo3(); ?>">
                                    </div>
                                 </div>
        
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-success">Enviar</button>
                                        <a class="btn btn-danger" href="index.php">Voltar</a>
                                    </div>
                                </div>
                            </form>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>






<?php include_once '../rodape.php'; ?>