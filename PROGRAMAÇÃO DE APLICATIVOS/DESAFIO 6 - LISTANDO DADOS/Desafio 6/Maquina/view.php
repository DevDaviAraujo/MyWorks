<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VISUALIZAR</title>
</head>
<body>
    <a href="../Usuario/menu.php">Menu</a><br>
    <a href="Create.php">Cadastrar</a><br><br>

    <h1>Lista Maquina</h1>

    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

    require_once ("Conn.php");
    require_once("ListMaq.php");

    $ListMaq = new ListMaq();
    $result_Maq = $ListMaq->list();

    foreach ($result_Maq as $row_Maq) {

        extract($row_Maq);

        echo "<br>ID: $id <br>";

        echo "Tamanho: $tamanho <br>";

        echo "Cor: $cor <br>";

        echo "Peso: $peso Kg <br>";

        echo "Preço: R$ $preco <br>";

        echo "Tipo: $tipo <br>";

        echo "<hr>";
    }


    ?>
</body>
</html>