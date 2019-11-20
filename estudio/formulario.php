<?php
include_once 'estudio.php';

$estudio = new Estudio();

if(!empty($_GET['id_estudio'])){
    $estudio->recuperarPorId($_GET['id_estudio']);
}


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
                            <form action="processamento.php?acao=salvar" method="post">

                                <input type="hidden" name="id_estudio" id="id_estudio" value="<?php echo $estudio->getIdEstudio(); ?>">

                                    <div class="form-group row">    
                                    <div class="col-md-4 mb-3">
                                     <label for="estudio">Estúdio</label>
                                         <input type="text" class="form-control" name="estudio" id="estudio" placeholder="Gênero de filmes"  required value="<?php echo $estudio->getNome(); ?>">
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