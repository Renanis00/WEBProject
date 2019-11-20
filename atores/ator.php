<?php

include_once '../conexao.php';

class Ator{

    protected $id_ator;
    protected $ator;

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
        return $this->ator;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($ator)
    {
        $this->ator = $ator;
    }


    public function inserir($dados)
    {   
        $conexao = new Conexao();
        $ator = $dados['ator'];

        
        $sql = "insert into ator (ator) values ('$ator')";

        return $conexao->executar($sql);
    }

    public function alterar($dados)
    {
        $id_ator = $dados['id_ator'];
        $nome_ator = $dados['nome_ator'];
        $filmes_ator = $dados['filmes_ator'];

        $sql = "update ator set 
                    nome_ator = '$nome_ator'
                    filmes_ator = '$filmes_ator' 
                where id_ator = $id_ator";

        $conexao = new Conexao();
        $conexao->executar($sql);
    }

    public function deletar($id_ator)
    {
        $conexao = new Conexao();

        $sql = "SET foreign_key_checks = 0;  
        delete from ator WHERE id_ator='$id_ator';
        set foreign_key_checks = 1;";

        $conexao->executar($sql);
    }

    public function recuperarTodos()
    {   
        $conexao = new Conexao();
        $sql = "select  a.id_ator, a.ator, f.titulo FROM ator a
        JOIN filmes f
        ON a.id_ator = f.atorfk
        ORDER BY ator";

        
        return $conexao->recuperarTodos($sql);
    }

    public function recuperarPorId($id_ator)
    {
        $sql = "select * from filmes where id_ator = $id_ator";

        $conexao = new Conexao();
        $dados = $conexao->recuperarTodos($sql);

        $this->id_filme = $dados[0]['id_ator'];
        $this->nome_ator = $dados[0]['nome_ator'];
    }
}