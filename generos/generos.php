<?php

include_once '../Conexao.php';

class Genero{

    protected $id_genero;
    protected $genero;

    /**
     * @return mixed
     */
    public function getIdGenero()
    {
        return $this->id_genero;
    }

    /**
     * @param mixed $id_genero
     */
    public function setIdGenero($id_genero)
    {
        $this->id_genero = $id_genero;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->genero;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($genero)
    {
        $this->genero = $genero;
    }

    

    public function inserir($dados)
    {
        $conexao = new Conexao();
        $genero = $dados['genero'];

        $sql = "insert into genero (genero) values ('$genero')";

        return $conexao->executar($sql);
    }

    public function alterar($dados)
    {
        $id_genero = $dados['id_genero'];
        $genero = $dados['genero'];

        $sql = "update genero set 
                    genero = '$genero'
                where id_genero = $id_genero";

        $conexao = new Conexao();
        $conexao->executar($sql);
    }

    public function deletar($id_genero)
    {
        $sql = "delete from genero where id_genero = $id_genero";

        $conexao = new Conexao();
        $conexao->executar($sql);
    }

    public function recuperarTodos()
    {
        $sql = "

        select * from genero order by genero ASC";


        $conexao = new Conexao();
        return $conexao->recuperarTodos($sql);
    }

    public function recuperarPorId($id_genero)
    {
        $conexao = new Conexao();
        $sql = "select * from genero where id_genero = $id_genero";

        
        $dados = $conexao->recuperarTodos($sql);

        $this->id_filme = $dados[0]['id_genero'];
        $this->genero = $dados[0]['genero'];
    }
}