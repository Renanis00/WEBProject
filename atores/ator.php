<?php

include_once '../Conexao.php';

class Atores{

    protected $id_ator;
    protected $nome_ator;
    protected $filmes_ator;


    /**
     * @return mixed
     */
    public function getIdAtor()
    {
        return $this->id_ator;
    }

    /**
     * @param mixed $id_ator
     */
    public function setIdAtor($id_ator)
    {
        $this->id_ator = $id_ator;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome_ator;
    }

    /**
     * @param mixed $nome_ator
     */
    public function setNome($nome_ator)
    {
        $this->nome_ator = $nome_ator;
    }

    /**
     * @return mixed
     */
    public function getFilmes()
    {
        return $this->filmes_ator;
    }

    /**
     * @param mixed $filmografia_ator
     */
    public function setFilmes($filmes_ator)
    {
        $this->filmes_ator = $filmes_ator;
    }

    public function inserir($dados)
    {
        $nome_ator = $dados['nome_ator'];
        $filmes_ator = $dados['filmes_ator'];

        $conexao = new Conexao();
        $sql = "insert into ator (nome_ator, filmografia_ator) values ('$nome_ator', '$filmes_ator')";

        return $conexao->executar($sql);
    }

    public function alterar($dados)
    {
        $nome = $dados['nome'];
        $id_ator = $dados['id_ator'];

        $sql = "update ator set 
                    nome = '$nome' 
                where id_ator = $id_ator";

        $conexao = new Conexao();
        $conexao->executar($sql);
    }

    public function deletar($id_ator)
    {
        $sql = "delete from ator where id_ator = $id_ator";

        $conexao = new Conexao();
        $conexao->executar($sql);
    }

    public function recuperarTodos()
    {
        $sql = "select * from ator";

        $conexao = new Conexao();
        return $conexao->recuperarTodos($sql);
    }

    public function recuperarPorId($id_ator)
    {
        $sql = "select * from ator where id_ator = $id_ator";

        $conexao = new Conexao();
        $dados = $conexao->recuperarTodos($sql);

        $this->id_ator = $dados[0]['id_ator'];
        $this->nome_ator = $dados[0]['nome_ator'];
    }
}