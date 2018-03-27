<?php

require_once './classes/dao/conexao.php';
require_once './classes/modelo/Categoria.php';
require_once './classes/dao/CategoriaDao.php';

$categoria = new Categoria();
$categoria->setId($_POST["id"]);

$dao = new CategoriaDAO();

$dao->remover($categoria);

//if($dao->remover($categoria)) {
//    echo "Categoria removida com sucesso";
//} else {
//    echo "Falha na exclusão da categoria";
//}

header("location:categorias.php");
