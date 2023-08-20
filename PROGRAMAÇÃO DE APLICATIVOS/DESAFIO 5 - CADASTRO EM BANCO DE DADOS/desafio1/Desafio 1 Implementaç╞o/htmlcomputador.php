<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php
    require_once("joaootario.php");

    $formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if(!empty($formData['addComputador'])){

      $createUser = new joaootario();
      $createUser->formData = $formData;
      $result = $createUser->create();

      if($result){
        echo "Usuário cadastro com sucesso!";
      }
      else{
        echo "Usuário não cadastrado";
      }
    }
  ?>
    

<div class="container d-flex text-start">
    <form action="" class="form" method="POST">
        <input type="text" placeholder="tamanho" name="tamanho" class="input" require> <br>
        <input type="text" placeholder="cor" name="cor" class="input" require> <br>
        <input type="text" placeholder="memória" name="memoria" class="input" require> <br>
        <input type="text" placeholder="processador" name="processador" class="input" require> <br>
        <input type="text" placeholder="placa mãe" name="placamae" class="input" require> <br>
        <input type="text" placeholder="fonte" name="fonte" class="input" require> <br>
        <br>
        <label  >Escolha o tipo de computador:</label>
        <select name="tipos" >
        <option name="tipos" value="ALL IN ONE">ALL IN ONE</option>
        <option name="tipos" value="MINI PC">MINI PC</option>
        <option name="tipos" value="MICRO PC">MICRO PC </option>
        <br>

        <input type="submit"  value="Confirmar" name="addComputador" require> 
        
    </form>
    

</div>
</body>
</html>