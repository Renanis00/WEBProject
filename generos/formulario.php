<?php
include_once 'generos.php';

$genero = new Genero();

if(!empty($_GET['id_genero'])){
    $genero->recuperarPorId($_GET['id_genero']);
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

                                <input type="hidden" name="id_genero" id="id_genero" value="<?php echo $genero->getIdGenero(); ?>">

                                    <div class="form-group row">    
                                    <div class="col-md-4 mb-3">
                                     <label for="genero">Gênero</label>
                                         <input type="text" class="form-control" name="genero" id="genero" placeholder="Gênero de filmes"  required value="<?php echo $genero->getNome(); ?>">
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