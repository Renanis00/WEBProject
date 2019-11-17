<?php

include_once '../conexao.php';

class Filme{

    protected $id_filme;
    protected $nome_filme;
    protected $ano_filme;
    protected $estudio_filme;
    protected $genero_filme;
    protected $classificacao_filme;

    /**
     * @return mixed
     */
    public function getIdfilme()
    {
        return $this->id_filme;
    }

    /**
     * @param mixed $id_filme
     */
    public function setIdfilme($id_filme)
    {
        $this->id_filme = $id_filme;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome_filme;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome_filme)
    {
        $this->nome_filme = $nome_filme;
    }

    /**
     * @return mixed
     */
    public function getAno()
    {
        return $this->ano_filme;
    }

    /**
     * @param mixed $ano
     */
    public function setAno($ano_filme)
    {
        $this->ano_filme = $ano_filme;
    }

    public function inserir($dados)
    {
        $nome_filme = $dados['nome_filme'];
        $ano_filme = $dados['ano_filme'];

        $conexao = new Conexao();
        $sql = "insert into filmes (nome_filme, ano_filme) values ('$nome_filme', '$ano_filme')";

        return $conexao->executar($sql);
    }

    public function alterar($dados)
    {
        $nome = $dados['nome_filme'];
        $id_filme = $dados['id_filme'];

        $sql = "update filmes set 
                    nome_filme = $nome_filme 
                where id_filme = $id_filme";

        $conexao = new Conexao();
        $conexao->executar($sql);
    }

    public function deletar($id_filme)
    {
        $sql = "delete from filmes where id_filme = $id_filme";

        $conexao = new Conexao();
        $conexao->executar($sql);
    }

    public function recuperarTodos()
    {
        $sql = "select * from filmes";

        $conexao = new Conexao();
        return $conexao->recuperarTodos($sql);
    }

    public function recuperarPorId($id_filme)
    {
        $sql = "select * from cargo where id_filme = $id_filme";

        $conexao = new Conexao();
        $dados = $conexao->recuperarTodos($sql);

        $this->id_filme = $dados[0]['id_filme'];
        $this->nome = $dados[0]['nome'];
    }
}