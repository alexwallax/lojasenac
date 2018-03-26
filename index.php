<?php // 1º passo conexao
//fazendo a conexão com o banco de dados
//$conexao = mysqli_connect("localhost", "root", "", "loja");


//2º passo sql
//$categoria = "Telefonia";

//$sql = "insert into CATEGORIAS (cat_nome) values ('{$categoria}')";



//3º executa
//executar essa query - ele pede a conexao e a string que quero executar
//o devolve um boolean por isso vamos gravar na variavel $resultado
//$resultado = mysqli_query($conexao, $sql);

//if($resultado) {
//    echo "Produto {$categoria} inserido com Sucesso";
//} else {
//    echo "Produto {$categoria} inserido com Sucesso";
//}

require_once './classes/modelo/Categoria.php';
require_once './classes/dao/CategoriaDao.php';

$categoriaDAO = new CategoriaDAO();

echo '<pre>';
print_r($categoriaDAO->listarTodos());
echo '<pre>';
