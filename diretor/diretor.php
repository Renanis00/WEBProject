<?php

include_once '../Conexao.php';

class Diretor{

    protected $id_diretor;
    protected $diretor;

    /**
     * @return mixed
     */
    public function getIdDiretor()
    {
        return $this->id_diretor;
    }

    /**
     * @param mixed $id_diretor
     */
    public function setIdDiretor($id_diretor)
    {
        $this->id_diretor = $id_diretor;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->diretor;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($diretor)
    {
        $this->diretor = $diretor;
    }

    

    public function inserir($dados)
    {
        $conexao = new Conexao();
        $diretor = $dados['diretor'];

        $sql = "insert into diretor (diretor) values ('$diretor')";

        return $conexao->executar($sql);
    }

    public function alterar($dados)
    {
        $id_diretor = $dados['id_diretor'];
        $diretor = $dados['diretor'];

        $sql = "update diretor set 
                    diretor = '$diretor'
                where id_diretor = $id_diretor";

        $conexao = new Conexao();
        $conexao->executar($sql);
    }

    public function deletar($id_diretor)
    {
        $conexao = new Conexao();
        $sql = "
        SET foreign_key_checks = 0;  
        delete from ator WHERE id_diretor='$id_diretor';
        set foreign_key_checks = 1";

        $conexao->executar($sql);
    }

    public function recuperarTodos()
    {
        $sql = "select d.id_diretor, d.diretor, f.titulo from filmes f
        JOIN diretor d
        ON d.id_diretor = f.diretorfk
        ORDER BY diretor";


        $conexao = new Conexao();
        return $conexao->recuperarTodos($sql);
    }

    public function recuperarPorId($id_diretor)
    {
        $conexao = new Conexao();
        $sql = "select * from diretor where id_diretor = $id_diretor";

        
        $dados = $conexao->recuperarTodos($sql);

        $this->id_filme = $dados[0]['id_diretor'];
        $this->diretor = $dados[0]['diretor'];
    }
}