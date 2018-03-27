<?php

class CategoriaDAO {
    
    private $conexao;
    
    public function __construct() {
        $this->conexao = mysqli_connect("localhost", "root", "", "loja");
        
    }

    public function inserir(Categoria $categoria) {
        $conexao = mysqli_connect("localhost", "root", "", "loja");
        $sql = "insert into CATEGORIAS (cat_nome) values ('{$categoria->getNome()}')";
        return mysqli_query($conexao, $sql);
    }
    
    public function remover(Categoria $categoria) {
        $conexao = mysqli_connect("localhost", "root", "", "loja");
        $sql = "delete from categorias where id={$categoria->getId()}";
        return mysqli_query($conexao, $sql);
    }    

    public function listarTodos() {
        $categorias = array();
        $conexao = mysqli_connect("localhost", "root", "", "loja");       
        $sql = "select * from categorias";
        $resultado = mysqli_query($conexao, $sql);
        while ($categoria_array = mysqli_fetch_assoc($resultado)) {
            $categoria = new Categoria();
            $categoria->setId($categoria_array['CAT_ID']);
            $categoria->setNome($categoria_array['CAT_NOME']);
            array_push($categorias, $categoria);
        }
        return $categorias;
    }
    
    
    
    
}
