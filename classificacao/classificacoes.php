<?php

include_once '../conexao.php';

class Classificacao{

    protected $id_classificacao;
    protected $nome_classificacao;

    /**
     * @return mixed
     */
    public function getIdClassificacao()
    {
        return $this->id_classificacao;
    }

    /**
     * @param mixed $id_classificacao
     */
    public function setIdClassificacao($id_classificacao)
    {
        $this->id_classificacao = $id_classificacao;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome_classificacao;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome_classificacao)
    {
        $this->nome_classificacao = $nome_classificacao;
    }

    

    public function inserir($dados)
    {
        $nome_classificacao = $dados['nome_classificacao'];

        $conexao = new Conexao();
        $sql = "insert into classificacoes (nome_classificacao) values ('$nome_classificacao')";

        return $conexao->executar($sql);
    }

    public function alterar($dados)
    {
        $id_classificacao = $dados['id_classificacao'];
        $nome_classificacao = $dados['nome_classificacao'];

        $sql = "update classificacoes set 
                    nome_classificacao = '$nome_classificacao'
                where id_classificacao = $id_classificacao";

        $conexao = new Conexao();
        $conexao->executar($sql);
    }

    public function deletar($id_classificacao)
    {
        $sql = "delete from classificacoes where id_classificacao = $id_classificacao";

        $conexao = new Conexao();
        $conexao->executar($sql);
    }

    public function recuperarTodos()
    {
        $sql = "select * from classificacao order by id_classificacao ASC";


        $conexao = new Conexao();
        return $conexao->recuperarTodos($sql);
    }

    public function recuperarPorId($id_classificacao)
    {
        $sql = "select * from classificacoes where id_classificacao = $id_classificacao";

        $conexao = new Conexao();
        $dados = $conexao->recuperarTodos($sql);

        $this->id_classificacao = $dados[0]['id_classificacao'];
        $this->nome_classificacao = $dados[0]['nome_classificacao'];
    }
}