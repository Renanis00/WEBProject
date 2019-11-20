<?php

include_once '../Conexao.php';

class Estudio{

    protected $id_estudio;
    protected $estudio;

    /**
     * @return mixed
     */
    public function getIdEstudio()
    {
        return $this->id_estudio;
    }

    /**
     * @param mixed $id_estudio
     */
    public function setIdEstudio($id_estudio)
    {
        $this->id_estudio = $id_estudio;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->estudio;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($estudio)
    {
        $this->estudio = $estudio;
    }

    

    public function inserir($dados)
    {
        $conexao = new Conexao();
        $estudio = $dados['estudio'];

        $sql = "insert into estudio (estudio) values ('$estudio')";

        return $conexao->executar($sql);
    }

    public function alterar($dados)
    {
        $id_estudio = $dados['id_estudio'];
        $estudio = $dados['estudio'];

        $sql = "update estudio set 
                    estudio = '$estudio'
                where id_estudio = $id_estudio";

        $conexao = new Conexao();
        $conexao->executar($sql);
    }

    public function deletar($id_estudio)
    {
        $sql = "delete from estudio where id_estudio = $id_estudio";

        $conexao = new Conexao();
        $conexao->executar($sql);
    }

    public function recuperarTodos()
    {
        $sql = "

        select * from estudio order by estudio ASC";


        $conexao = new Conexao();
        return $conexao->recuperarTodos($sql);
    }

    public function recuperarPorId($id_estudio)
    {
        $conexao = new Conexao();
        $sql = "select * from estudio where id_estudio = $id_estudio";

        
        $dados = $conexao->recuperarTodos($sql);

        $this->id_filme = $dados[0]['id_estudio'];
        $this->estudio = $dados[0]['estudio'];
    }
}