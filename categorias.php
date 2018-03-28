<?php
require_once './classes/dao/conexao.php';
require_once './classes/modelo/Categoria.php';
require_once './classes/dao/CategoriaDao.php';
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/estilo.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>  
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
                        <td>
                            <form action="remove-categoria.php" method="post">
                                <input type="hidden" name="id" value="<?= $categoria->getId() ?>">
                                <button type="submit" class="btn btn-danger">Remover</button>
                            </form>
                        </td>
                    </tr>
                    <?php
                }
                ?>


            </tbody>

        </table>

    </body>
</html>
