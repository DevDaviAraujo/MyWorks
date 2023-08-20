<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>MAQUINA</title>
</head>
<body>
<?php
require_once("Maquinadelavar.php");

$formData = filter_input_array(INPUT_POST,FILTER_DEFAULT);
if(!empty($formData['addMaq'])){
    $createMaq = new Maq();
    $createMaq->formData = $formData;
    $result = $createMaq->create();

    if($result){
        echo "Máquina cadastrada com sucesso!";
    }
    else{
        echo "Máquina não cadastrada";
    }
}
?>
<form name="createMaq"  method="POST" action="">
    <label>Tamanho:</label><br>
    <input type="text" placeholdder="Tamanho da máquina" name="tamanho" required><br>
    <label>Cor:</label><br>
    <input type="text" placeholdder="Cor da máquina" name="cor" required><br>
    <label>Peso:</label><br>
    <input type="text" placeholdder="Peso da máquina" name="peso" required><br>
    <label>Preço:</label><br>
    <input type="text" placeholdder="Preço da máquina" name="preco" required><br>
    <label>Tipo do produto:</label><br>
    <div>
        <select name="tipo">
            <option value="lavadora/secadora">Lavadora/Secadora</option>
            <option value="lavadora">Lavadora</option>
            <option value="secadora">Secadora</option>
        </select>
    </div><br>
    <input type="submit" value="Cadastrar" name="addMaq">
</form>
</body>
</html> 