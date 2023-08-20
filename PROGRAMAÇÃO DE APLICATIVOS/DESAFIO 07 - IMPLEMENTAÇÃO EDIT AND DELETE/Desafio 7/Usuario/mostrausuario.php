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

    <a href="menu.php">Menu</a><br>
    <a href="indexusuario.php">Cadastrar</a><br><br>
    <h1>Listar Usuários</h1>

    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

    require_once ("conn.php");
    require_once("listusuario.php");

    $listusuario = new listusuario();
    $result_usuario = $listusuario->list();

    foreach ($result_usuario as $row_usuario) {

        extract($row_usuario);

        echo "Nome: $nome <br>";

        echo "Email: $email <br>";

        echo "Senha: $senha <br>";

    }

    ?>

</body>

</html>