<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
    <a href="../Usuario/menu.php">Menu</a><br>
    <a href="lista.php">Lista Computador</a><br><br>

  <?php
session_start();
?>

<?php
    require_once("joaootario.php");

    $formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if(!empty($formData['addComputador'])){

      $createUser = new joaootario();
      $createUser->formData = $formData;
      $result = $createUser->create();

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

    


<form  method="POST" action="">
    <label for="">Tamanho</label><br>
    <input type="text" name="tamanho" required><br>

    <label for="">Cor</label><br>
    <input type="text" name="cor" required><br>

    <label for="">Memoria</label><br>
    <input type="text" name="memoria" required><br>

    <label for="">Processador</label><br>
    <input type="text" name="processador" required><br>

    <label for="">Placa Mãe</label><br>
    <input type="text" name="placamae" required><br>

    <label for="">Fonte Alimentação</label><br>
    <input type="text" name="fonte" required><br><br>

    <div>
    <label>Tipo:</label>
    <select name="tipos">
        <option value="All in one">All in one</option>
        <option value="Mini computador">Mini computador</option>
        <option value="Micro computador">Micro computador</option>
    </select>
    </div><br>

    <input type="submit" value="adicionar" name="addComputador">

</form>
   


</body>
</html>