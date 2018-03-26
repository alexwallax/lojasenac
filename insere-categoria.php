<?php

require_once './classes/modelo/Categoria.php';
require_once './classes/dao/CategoriaDao.php';

//instaciando Categoria
$categoria = new Categoria();
$categoria->setNome($_POST['nome']);

$categoriaDAO = new CategoriaDAO();
$categoriaDAO->inserir($categoria);


//redirecionar a pag - adiciona-categoria.php
header("location:adiciona-categoria.php");

