<?php

include_once '../conexao.php';

class Filme{

    protected $id_filme;
    protected $titulo;
    protected $data;
    protected $genero;
    protected $atorfk;
    protected $classificacaofk;
    protected $diretorfk;
    protected $estudiofk;


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
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $nome
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    public function getGenerofk()
    {
        return $this->genero;
    }

    /**
     * @param mixed $genero
     */
    public function setGenerofk($genero)
    {
        $this->genero = $genero;
    }

    public function getClassificacaofk()
    {
        return $this->classificacaofk;
    }

    /**
     * @param mixed $classificacaofk
     */
    public function setClassificacaofk($classificacaofk)
    {
        $this->classificacaofk = $classificacaofk;
    }

    public function getDiretorfk()
    {
        return $this->diretorfk;
    }

    /**
     * @param mixed $diretorfk
     */
    public function setDiretorfk($diretorfk)
    {
        $this->diretorfk = $diretorfk;
    }

    public function getEstudiofk()
    {
        return $this->estudiofk;
    }

    /**
     * @param mixed $estudiofk
     */
    public function setEstudiofk($estudiofk)
    {
        $this->estudiofk = $estudiofk;
    }

    public function getAtorfk()
    {
        return $this->atorfk;
    }

    /**
     * @param mixed $atorfk
     */
    public function setAtorfk($atorfk)
    {
        $this->atorfk = $atorfk;
    }

    public function inserir($dados)
    {
        $conexao = new Conexao();
        $titulo = $dados['titulo'];
        $data = $dados['data'];
        $genero = $dados['generofk'];
        $atorfk = $dados['atorfk'];
        $classificacaofk = $dados['classificacaofk'];
        $diretorfk = $dados['diretorfk'];
        $estudiofk = $dados['estudiofk'];

        
        $sql = "insert filmes (titulo, data, generofk, atorfk, classificacaofk, diretorfk, estudiofk) values ('$titulo', '$data', '$genero', '$atorfk', '$classificacaofk', '$diretorfk', '$estudiofk')";

        return $conexao->executar($sql);
    }
 
    public function alterar($dados)
    {
        $nome = $dados['titulo'];
        $id_filme = $dados['id_filme'];

        $sql = "update filmes set 
                    titulo = $titulo 
                where id_filme = $id_filme";

        $conexao = new Conexao();
        $conexao->executar($sql);
    }

    public function deletar($id_filme)
 {
        $conexao = new Conexao();
        $sql = "delete from filmes where id_filme = $id_filme";

        $conexao->executar($sql);
    }


    public function recuperarTodos()
    {
        $conexao = new Conexao();
        $sql = "select f.id_filme, f.titulo, f.data, g.genero, c.classificacao, d.diretor, e.estudio, a.ator FROM filmes f
            JOIN genero g
            ON g.id_genero = f.generofk
            JOIN classificacao c
            ON c.id_classificacao = f.classificacaofk
            JOIN diretor d
            ON d.id_diretor = f.diretorfk
            JOIN estudio e
            ON e.id_estudio = f.estudiofk
            JOIN ator a
            ON a.id_ator = f.atorfk";

       
        return $conexao->recuperarTodos($sql);
    }

    public function recuperarPorId($id_filme)
    {
        $sql = "select * from filmes where id_filme = $id_filme";

        $conexao = new Conexao();
        $dados = $conexao->recuperarTodos($sql);

        $this->id_filme = $dados[0]['id_filme'];
        $this->nome = $dados[0]['nome'];
    }
}