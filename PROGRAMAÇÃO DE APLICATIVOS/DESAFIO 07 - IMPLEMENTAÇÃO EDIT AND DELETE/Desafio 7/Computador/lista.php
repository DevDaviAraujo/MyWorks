<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="../Usuario/menu.php">Menu</a><br>
    <a href="htmlcomputador.php">Cadastrar</a><br><br>

<h1>Listar Computadores</h1>
<?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

    require_once ("comunicacao.php");
    require_once("viewlist.php");

    $viewlist = new viewlist();
    $result_Computador = $viewlist->list();

    foreach ($result_Computador as $row_Computador) {
        //var_dump($row_Computador);

        extract($row_Computador);

        //echo "ID: " . $row_Computador['id'] . "<br>";
        echo "ID: $id <br>";

        //echo "Nome: " . $row_Computador['name'] . "<br>";
        echo "Nome: $tamanho <br>";

        //echo "E-mail: " . $row_Computador['email'] . "<br>";
        echo "Cor: $cor <br>";

        echo "Memória: $memoria <br>";

        echo "Processador: $processador <br>";

        echo "Placa-mãe: $placamae <br>";

        echo "Fonte de Alimentação: $fontealimentacao <br>";

        echo "Tipos : $tipos <br>";

        echo "<hr>";

        echo "<a href='editcomp.php?id=$id'>Editar</a><br>";
        echo "<a href='delete.php?id=$id'>Deletar</a><br>";
    }

    ?>
    </body>
</html>