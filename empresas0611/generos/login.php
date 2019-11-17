<?php include_once '../cabecalho.php';



?>

    <h1>Cargo</h1>

    <form action="processamento.php?acao=logar" method="post">
        <div class="form-group row">
            <label for="id_cargo" class="col-sm-2 col-form-label">E-mail</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="id_cargo" id="id_cargo">
            </div>
        </div>
        <div class="form-group row">
            <label for="nome" class="col-sm-2 col-form-label">Senha</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nome" id="nome">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-success">Enviar</button>
                <a class="btn btn-danger" href="index.php">Voltar</a>
            </div>
        </div>
    </form>



<?php include_once '../rodape.php'; ?>