<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

require_once("user.php");

// Recebendo os valores em forma de array
$formData = filter_input_array(INPUT_POST,FILTER_DEFAULT);
// Verificando se o botão de cadastro foi acionado
if(!empty($formData['addcelular'])){
    //Criando novo objeto e setando ao atributo formData o array
    $createUser = new user();
    $createUser->formData = $formData;
    $result = $createUser->create();

    if($result){
        echo "Usuário cadastrado com sucesso!";
    }
    else{
        echo "Usuário não cadastrado";
    }

}

?>

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