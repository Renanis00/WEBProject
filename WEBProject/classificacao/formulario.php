<?php
include_once 'classificacoes.php';

$classificacao = new Classificacao();

if(!empty($_GET['id_classificacao'])){
    $classificacao->recuperarPorId($_GET['id_classificacao']);
}


include_once '../cabecalho.php';
?>

    <div class="row">
    	<div class="col-md-12">

    		<div class="box box-danger">
    			<div class="box-header with-border">
    				<h3 class="box-title">Adicionar Classificação</h3>
    			</div>
    			<div class="box-body">
    				<div class="row">
    					<div class="col-md-12">
                            <form action="processamento.php?acao=salvar" method="post">

                                <input type="hidden" name="id_classificacao" id="id_classificacao" value="<?php echo $classificacao->getIdClassificacao(); ?>">

                                <div class="form-group row">
                                    <label for="nome_classificacao" class="col-sm-1 col-form-label">Classificação</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nome_classificacao" id="nome_classificacao" value="<?php echo $classificacao->getNome(); ?>">
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