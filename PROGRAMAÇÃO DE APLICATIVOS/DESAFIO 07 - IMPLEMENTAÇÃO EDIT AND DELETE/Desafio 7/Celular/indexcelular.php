<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

require_once("celular.php");

// Recebendo os valores em forma de array
$formData = filter_input_array(INPUT_POST,FILTER_DEFAULT);
// Verificando se o botão de cadastro foi acionado
if(!empty($formData['addcelular'])){
    //Criando novo objeto e setando ao atributo formData o array
    $createcelular = new celular();
    $createcelular->formData = $formData;
    $result = $createcelular->create();

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
    <a href="../Usuario/menu.php">Menu</a><br>
    <a href='mostracell.php'>Lista Celular</a><br><br>


<form  method="POST" action="">
    <label for="">Tamanho:</label><br>
    <input type="text" name="tamanho" required><br>

    <label for="">Cor:</label><br>
    <input type="text" name="cor" required><br>

    <label for="">Marca:</label><br>
    <input type="text" name="marca" required><br>

    <label for="">Modelo:</label><br>
    <input type="text" name="modelo" required><br>

    <label for="">Preço:</label><br>
    <input type="text" name="preco" required><br><br>

    <div>
    <label>Categoria:</label>
    <select name="categoria">
        <option value="smartphones">SMARTPHONES</option>
        <option value="minicelulares">MINICELULARES</option>
        <option value="flip">FLIP</option>
    </select>
    </div>
    <br>

    <input type="submit" value="adicionar" name="addcelular">

</form>

</body>
</html>