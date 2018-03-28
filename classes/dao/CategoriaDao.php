<?php

class CategoriaDAO {
    
    private $conexao;
    
    public function __construct() {
        $this->conexao = Conexao::conectar();  
    }

    public function inserir(Categoria $categoria) {
        $sql = "insert into CATEGORIAS (cat_nome) values ('{$categoria->getNome()}')";
        return mysqli_query($this->conexao, $sql);
    }
    
    public function remover(Categoria $categoria) {
        $sql = "delete from categorias where cat_id={$categoria->getId()}";
        return mysqli_query($this->conexao, $sql);
    }    

    public function listarTodos() {
        $categorias = array();
        $sql = "select * from categorias";
        $resultado = mysqli_query($this->conexao, $sql);
        while ($categoria_array = mysqli_fetch_assoc($resultado)) {
            $categoria = new Categoria();
            $categoria->setId($categoria_array['CAT_ID']);
            $categoria->setNome($categoria_array['CAT_NOME']);
            array_push($categorias, $categoria);
        }
        return $categorias;
    }
  
}
