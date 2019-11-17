<?php
include_once 'filmes.php';

$filme = new Filmes();


if(!empty($_GET['id_filme'])){
    $filme->recuperarPorId($_GET['id_filme']);
}

include_once '../cabecalho.php';
?>

    <div class="row">
    	<div class="col-md-12">

    		<div class="box box-danger">
    			<div class="box-header with-border">
    				<h3 class="box-title">Adicionar um filme</h3>
    			</div>
    			<div class="box-body">
    				<div class="row">
    					<div class="col-md-12">
                            <form action="processamento.php?acao=salvar" method="post">

                                <input type="hidden" name="id_filme" id="id_filme" value="<?php echo $filme->getIdFilme(); ?>"> 

                                <div class="form-group row">
                                    <label for="nome_filme" class="col-sm-2 col-form-label">Título</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nome" id="nome" value="<?php echo $filme->getNome(); ?>">
                                        </div>
                                    </div>    
                                <div class="form-group row">
                                    <label for="ano_filme" class="col-sm-2 col-form-label">Data de lançamento</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="ano" id="ano" value="<?php echo $filme->getAno(); ?>">
                                        </div>
                                    </div>    
                                <div class="form-group row">
                                    <label for="estudio_filme" class="col-sm-2 col-form-label">Estúdio</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="estudio" id="estudio" value="<?php echo $filme->getEstudio(); ?>">
                                        </div>
                                    </div>    
                                <div class="form-group row">
                                    <label for="genero_filme" class="col-sm-2 col-form-label">Gênero</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="genero" id="genero" value="<?php echo $filme->getGenero(); ?>">
                                        </div>
                                    </div>    
                                <div class="form-group row">
                                    <label for="classif_filme" class="col-sm-2 col-form-label">Classificação</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="classif" id="classif" value="<?php echo $filme->getClassif(); ?>">
                                        </div>
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