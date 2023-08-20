<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Listar</title>
</head>

<body>

    <a href="../Usuario/menu.php">Menu</a><br>
    <a href="indexcelular.php">Cadastrar</a><br><br>
    <h1>Listar Celular</h1>

    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

    require_once ("conn.php");
    require_once("ListCelular.php");

    $listcelular = new ListCelular();
    $result_celular = $listcelular->list();

    foreach ($result_celular as $row_celular) {
        //var_dump($row_user);

        extract($row_celular);

        echo "ID: $id <br>";

        echo "Tamanho: $tamanho <br>";

        echo "Cor: $cor <br>";

        echo "Marca: $marca <br>";

        echo "Modelo: $modelo <br>";

        echo "Preço: $preco <br>";

        echo "Categoria: $categoria <br>";

        echo "<hr>";
    }

    ?>

</body>

</html>