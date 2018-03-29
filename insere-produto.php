<?php

require_once './classes/modelo/Produto.php';
require_once './classes/dao/ProdutoDAO.php';

//instaciando Produto
$produto = new Produto();
$produto->setNome($_POST['nome']);

$ProdutoDao = new ProdutoDAO();
$ProdutoDAO->inserir($produto);


//redirecionar a pag - adiciona-categoria.php
header("location:adiciona-produto.php");

