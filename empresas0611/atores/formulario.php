<?php
include_once 'ator.php';

$ator = new Ator();

if(!empty($_GET['id_ator'])){
    $ator->recuperarPorId($_GET['id_ator']);
}


include_once '../cabecalho.php';
?>

    <div class="row">
    	<div class="col-md-12">

    		<div class="box box-danger">
    			<div class="box-header with-border">
    				<h3 class="box-title">Ator / Atriz</h3>
    			</div>
    			<div class="box-body">
    				<div class="row">
    					<div class="col-md-12">
                            <form action="processamento.php?acao=salvar" method="post">

                                <input type="hidden" name="id_ator" id="id_ator" value="<?php echo $ator->getIdAtor(); ?>">

                                <div class="form-group row">
                                    <label for="nome_ator" class="col-sm-1 col-form-label">Nome</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nome_ator" id="nome_ator" value="<?php echo $ator->getNome(); ?>">
                                    </div>
                                 </div>   
                                <div class="form-group row">
                                    <label for="filmes_ator" class="col-sm-1 col-form-label">Filmes</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="filmes_ator" id="filmes_ator" value="<?php echo $ator->getFilmes(); ?>">
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