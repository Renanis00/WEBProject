<?php
include_once 'filme.php';



$filme = new Filme();

if(!empty($_GET['id_filme'])){
    $cargo->recuperarPorId($_GET['id_filme']);
}



include_once '../cabecalho.php';
?>

    <div class="row">
    	<div class="col-md-12">

    		<div class="box box-danger">
    			<div class="box-header with-border">
    				<h3 class="box-title">Filme</h3>
    			</div>
    			<div class="box-body">
    				<div class="row">
    					<div class="col-md-12">
                            <form action="processamento.php?acao=salvar" method="post">

                                <input type="hidden" name="id_filme" id="id_filme" value="<?php echo $filme->getIdFilme(); ?>">

                                <div class="form-group row">    
                                    <div class="col-md-4 mb-3">
                                     <label for="titulo">Título</label>
                                         <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Título do filme"  required value="<?php echo $filme->getTitulo(); ?>">
                                    </div>
                                 </div>
                                
                                 <div class="form-group row">
                                    <div class="col-md-3 mb-3">
                                     <label for="data">Data</label>
                                         <input type="text" class="form-control" name="data" id="data" placeholder="Data de lançamento" required value="<?php echo $filme->getData(); ?>">
                                    </div>
                                 </div>

                                 <div class="form-group row">
                                    <div class="col-md-3 mb-3">
                                     <label for="generofk">Gênero</label>
                                         <input type="text" class="form-control" name="generofk" id="generofk" placeholder="Gênero do filme" required value="<?php echo $filme->getGenerofk(); ?>">
                                    </div>
                                 </div>

                                <div class="form-group row">
                                    <div class="col-md-3 mb-3">
                                     <label for="classificacaofk">Classificação</label>
                                         <input type="text" class="form-control" name="classificacaofk" id="classificacaofk" placeholder="Classificação Indicativa" required value="<?php echo $filme->getClassificacaofk(); ?>">
                                    </div>
                                 </div>   

                                <div class="form-group row">
                                    <div class="col-md-3 mb-3">
                                     <label for="diretorfk">Diretor</label>
                                         <input type="text" class="form-control" name="diretorfk" id="diretorfk" placeholder="Diretor principal" required value="<?php echo $filme->getDiretorfk(); ?>">
                                    </div>
                                 </div>   

                                 <div class="form-group row">   
                                    <div class="col-md-3 mb-3">
                                     <label for="estudiofk">Estúdio</label>
                                         <input type="text" class="form-control" name="estudiofk" id="estudiofk" placeholder="Estúdio produtor" required value="<?php echo $filme->getEstudiofk(); ?>">
                                    </div>
                                 </div>
                                    
                                 <div class="form-group row">   
                                    <div class="col-md-7 mb-3">
                                     <label for="atorfk">Elenco principal</label>
                                         <input type="text" class="form-control" name="atorfk" id="atorfk" placeholder="Atores principais" required value="<?php echo $filme->getAtorfk(); ?>">
                                    </div>
                                 </div> 
                                    <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-success">Enviar</button>
                                        <a class="btn btn-danger" href="index.php">Voltar</a>
                                    </div>
                                </div>
                            </form>
                            <form>
  <div class="form-row">
 






<?php include_once '../rodape.php'; ?>