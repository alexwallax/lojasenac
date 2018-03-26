<?php

class CategoriaDAO {

    public function inserir(Categoria $categoria) {

        $conexao = mysqli_connect("localhost", "root", "", "loja");
        $sql = "insert into CATEGORIAS (cat_nome) values ('{$categoria->getNome()}')";
        return mysqli_query($conexao, $sql);
    }

}
