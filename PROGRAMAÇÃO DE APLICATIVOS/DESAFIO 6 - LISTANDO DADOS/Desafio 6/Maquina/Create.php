<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CADASTRAR</title>
    <link rel="stylesheet" href="creat.css">
</head>
<body>
    <a href="../Usuario/menu.php">Menu</a><br>
    <a href="view.php">Lista Maquina</a><br><br>
<?php
require_once("Maquinadelavar.php");
require_once("Conn.php");

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
    <input type="submit" value="Cadastrar" name="addMaq" class="sub">
</form>
</body>
</html> 