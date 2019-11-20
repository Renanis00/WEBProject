<?php

include_once '../conexao.php';

class Pedido{

    protected $id_pedido;
    protected $titulo1;
    protected $titulo2;
    protected $titulo3;

    /**
     * @return mixed
     */
    public function getIdPedido()
    {
        return $this->id_pedido;
    }

    /**
     * @param mixed $id_pedido
     */
    public function setIdPedido($id_pedido)
    {
        $this->id_pedido = $id_pedido;
    }

    /**
     * @return mixed
     */
    public function getTitulo1()
    {
        return $this->titulo1;
    }

    /**
     * @param mixed $titulo1
     */
    public function setTitulo1($titulo1)
    {
        $this->titulo1 = $titulo1;
    }
    /**
     * @return mixed
     */
    public function getTitulo2()
    {
        return $this->titulo2;
    }

    /**
     * @param mixed $titulo2
     */
    public function setTitulo2($titulo2)
    {
        $this->titulo2 = $titulo2;
    }
    /**
     * @return mixed
     */
    public function getTitulo3()
    {
        return $this->titulo3;
    }

    /**
     * @param mixed $titulo3
     */
    public function setTitulo3($titulo3)
    {
        $this->titulo3 = $titulo3;
    }

    

    public function inserir($dados)
    {
        $conexao = new Conexao();
        $id_pedido = $dados['id_pedido'];
        $titulo1 = $dados['titulo1'];
        $titulo2 = $dados['titulo2'];
        $titulo3 = $dados['titulo3'];

       
        $sql = "insert into pedidos (titulo1, titulo2, titulo3) values ('$titulo1, $titulo2, $titulo3')";

        return $conexao->executar($sql);
    }

    public function alterar($dados)
    {
        $id_pedido = $dados['id_pedido'];
        $titulo = $dados['titulo'];

        $sql = "update pedido set 
                    titulo1 = '$titulo1'
                where id_pedido = $id_pedido";

        $conexao = new Conexao();
        $conexao->executar($sql);
    }

    public function deletar($id_pedido)
    {
        $sql = "delete from pedidos where id_pedido = $id_pedido";

        $conexao = new Conexao();
        $conexao->executar($sql);
    }

    public function recuperarTodos()
    {
        $sql = "select * from pedidos order by id_pedido ASC";


        $conexao = new Conexao();
        return $conexao->recuperarTodos($sql);
    }

    public function recuperarPorId($id_pedido)
    {
        $conexao = new Conexao();
        $sql = "select * from pedidos where id_pedido = $id_pedido";

       
        $dados = $conexao->recuperarTodos($sql);

        $this->id_pedido = $dados[0]['id_pedido'];
        $this->titulo1 = $dados[0]['titulo1'];
        $this->titulo2 = $dados[0]['titulo2'];
        $this->titulo3 = $dados[0]['titulo3'];
    }
}