<?php


if (isset($_POST['nome'])) {
    
    $categoria = new Categoria();
    $categoria->setId($_POST['categoria']);
    
    $produto = new Produto();
    $produto->setNome($_POST['nome']);
    $produto->setDescricao($_POST['descricao']);
    $produto->setPreco($_POST['preco']);
    $produto->setCategoria($categoria);
    
    $produto = new Produto();
    $produto->inserir($produto);
    
    
}



?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <form action="produtos.php" method="post">           
            <label>Nome</label>
            <input type="text" id="nome" name="nome"><br>
            <label>Descrição</label>
            <textarea id="descricao" name="descricao"></textarea><br>
            <label>Categoria</label>
            
            <select id="categoria" name="categoria">
                
                <?php
                $dao = new CategoriaDAO();
                $categoria = $dao->listarTodos();
                foreach ($categorias as $categoria) {
                ?>    
                   
                
                <option value="<?= $categoria->getId() ?>"><?= $categoria->getNome() ?></option>
                
                <?php
                    }
                ?>
                
            </select><br>
            <label>Preço</label>
            <input type="text" id="nome" name="preco"><br>
            <button type="submit">Salvar</button>
        </form>
        
    </body>
</html>
