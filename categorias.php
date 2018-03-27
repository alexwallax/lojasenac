<?php
    require_once './classes/modelo/Categoria.php';
    require_once './classes/dao/CategoriaDao.php';   
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <table>

            <thead>

                <tr>
                    <td>Id</td>
                    <td>Nome</td>
                    <td>Ação</td>
                </tr>
            </thead>

            <tbody>

                <?php
                $dao = new CategoriaDAO();
                $categorias = $dao->listarTodos();
                foreach ($categorias as $categoria) {
                    ?>
                    <tr> 
                        <td><?= $categoria->getId() ?></td>
                        <td><?= $categoria->getNome() ?></td>
                        <td><a href="" >Remover</a></td>
                    </tr>
                    <?php
                }
                ?>
                    
                       
                    
            </tbody>

        </table>

    </body>
</html>
