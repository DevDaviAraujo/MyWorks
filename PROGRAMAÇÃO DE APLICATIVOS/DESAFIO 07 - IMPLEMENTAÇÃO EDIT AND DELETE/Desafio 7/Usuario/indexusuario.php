<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
</head>
<body>
<?php

require_once("usuario.php");

$formData = filter_input_array(INPUT_POST,FILTER_DEFAULT);
if(!empty($formData['addusuario'])){
    $createusuario = new usuario();
    $createusuario->formData = $formData;
    $result = $createusuario->create();

    if($result){
        $_SESSION['msgSucesso'] ="Usuário cadastrado com sucesso!";
    }
    else{
        $_SESSION['msgFail']="Usuário não cadastrado";
    }

    if(isset($_SESSION['msgSucesso'])){
        echo $_SESSION['msgSucesso'];
        unset($_SESSION['msgSucesso']);
    }
    if(isset($_SESSION['msgFail'])){
        echo $_SESSION['msgFail'];
        unset ($_SESSION['msgFail']);
    }

}

?>
    <a href="menu.php">Menu</a><br>
    <a href="mostrausuario.php">Lista</a><br><br>


<form  method="POST" action="">
    <label for="">Nome</label><br>
    <input type="text" name="nome" required><br>

    <label for="">Email</label><br>
    <input type="text" name="email" required><br>

    <label for="">Senha</label><br>
    <input type="text" name="senha" required><br><br>

    <input type="submit" value="adicionar" name="addusuario">

</form>

</body>
</html>