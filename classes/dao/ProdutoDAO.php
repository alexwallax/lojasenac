<?php


class ProdutoDAO {

    private $conexao;
    
    public function __construct() {
        $this->conexao = Conexao::conectar();  
    }
    public function inserir(Produto $produto) {
        $sql = "insert into produtos "
                . "(nome, descricao, preco, pro_cat_id) values "
                . "('{$produto->getNome()}', '{$produto->getDescricao()}', "
                . "{$produto->getPreco()}, {$produto->getCategoria()->getId()} )";
        return mysqli_query($this->conexao, $sql);
    }  
    
    public function remover(Produto $produto) {
        $sql = "delete from produtos where id={$produto->getId()}";
        return mysqli_query($this->conexao, $sql);
    } 
    
    public function editar(Produto $produto) {
        $sql = "update produtos set nome='{$produto->getNome()}' where id={$produto->getId()} ";
        return mysqli_query($this->conexao, $sql);     
        }

    public function listarTodos() {
        $produto = array();
        $sql = "select * from produtos p join categorias c on c.id=p.pro_cat_id";
        $resultado = mysqli_query($this->conexao, $sql);
        while ($produto_array = mysqli_fetch_assoc($resultado)) {
            $categoria = new Categoria();
            $categoria->setId($produto_array[5]);
            $categoria->setNome($produto_array[6]);
            
            $produto = new Produto();
            $produto->setId($produto_array[0]);
            $produto->setNome($produto_array[1]);
            $produto->setDescricao($produto_array[2]);
            $produto->setPreco($produto_array[3]);
            $produto->setCategoria($categoria);
            array_push($produtos, $produto);
        }
        return $produtos;
    }
    
}
