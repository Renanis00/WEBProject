<?php

include_once '../conexao.php';

class Genero{

    protected $id_genero;
    protected $nome_genero;

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
        return $this->nome_genero;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome_genero)
    {
        $this->nome_genero = $nome_genero;
    }

    

    public function inserir($dados)
    {
        $nome_genero = $dados['nome_genero'];

        $conexao = new Conexao();
        $sql = "insert into genero (nome_genero) values ('$nome_genero')";

        return $conexao->executar($sql);
    }

    public function alterar($dados)
    {
        $id_genero = $dados['id_genero'];
        $nome_genero = $dados['nome_genero'];

        $sql = "update genero set 
                    nome_genero = '$nome_genero'
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
        $sql = "select * from genero order by nome_genero ASC";


        $conexao = new Conexao();
        return $conexao->recuperarTodos($sql);
    }

    public function recuperarPorId($id_genero)
    {
        $sql = "select * from genero where id_genero = $id_genero";

        $conexao = new Conexao();
        $dados = $conexao->recuperarTodos($sql);

        $this->id_filme = $dados[0]['id_genero'];
        $this->nome_genero = $dados[0]['nome_genero'];
    }
}