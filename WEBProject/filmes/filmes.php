<?php

include_once '../Conexao.php';

class Filmes{

    protected $id_filme;
    protected $nome_filme;
    protected $ano_filme;
    protected $estudio_filme;
    protected $genero_filme;
    protected $classif_filme;

    
    /**
     * @return mixed
     */
    public function getIdFilme()
    {
        return $this->id_filme;
    }

    /**
     * @param mixed $id_filme
     */
    public function setIdFilme($id_filme)
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
     * @param mixed $nome_filme
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
     * @param mixed $ano_filme
     */
    public function setAno($ano_filme)
    {
        $this->ano_filme = $ano_filme;
    }

       /**
     * @return mixed
     */
    public function getEstudio()
    {
        return $this->estudio_filme;
    }

    /**
     * @param mixed $estudio_filme
     */
    public function setEstudio($estudio_filme)
    {
        $this->estudio = $estudio_filme;
    }
    
    
    public function getGenero()
    {
        return $this->genero_filme;
    }

    /**
     * @param mixed $genero_filme
     */
    public function setGenero($genero_filme)
    {
        $this->genero = $genero_filme;
    }

    public function getClassif()
    {
        return $this->classif_filme;
    }

    /**
     * @param mixed $classif_filme
     */
    public function setClassif($classif_filme)
    {
        $this->classif = $classif_filme;
    }

 

   
    public function inserir($dados)
    {
        $nome_filme = $dados['nome'];
        $ano_filme = $dados['ano'];
        $estudio_filme = $dados['estudio'];
        $genero_filme = $dados['genero'];
        $classif_filme = $dados['classif'];



        $conexao = new Conexao();
        $sql = "insert into filmes (nome_filme, ano_filme, estudio_filme, genero_filme, classif_filme) values ('$nome_filme', '$ano_filme', '$estudio_filme', '$genero_filme', '$classif_filme')";

        return $conexao->executar($sql);
    }

    public function alterar($dados)
    {
        $nome = $dados['nome'];
        $id_filme = $dados['id_filme'];

        $sql = "update filmes set 
                    nome = '$nome' 
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
        $sql = "select * from filmes where id_filme = $id_filme";

        $conexao = new Conexao();
        $dados = $conexao->recuperarTodos($sql);

        $this->id_filme = $dados[0]['id_filme'];
        $this->nome = $dados[0]['nome'];
    }
}