<?php
session_start();


//Receber o id do usuario
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>- Editar</title>
</head>

<body>

    <a href="lista.php">Listar</a><br>
    <a href="htmlcomputador.php">Cadastrar</a><br>

    <h1>Editar Computador</h1>

    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    //Incluir os arquivos

    require './joaootario.php';
    require './viewlist.php';

    //Receber os dados do formulario
    $formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    //Verificar se o usuario clicou no botao
    if (!empty($formData['SendEditUser'])) {
        //var_dump($formData);
        $editUser = new computador ();
        $editUser->formData = $formData;
        $value = $editUser->edit();
        if($value){
            echo  "<p style='color: green;'>Compuatdor editado com sucesso!</p>";
        }else{
            echo "<p style='color: #f00;'>Erro: Computador não editado com sucesso!</p>";
        }
    }

    //Verificar se o id possui valor
    if (!empty($id)) {

        //Instanciar a classe e criar o objeto
        $viewComputador = new viewlist();

        //Enviando o id para o atributo id da classe User
        $viewComputador->id = $id;

        $valueUser = $viewComputador->list();

        extract($valueUser);

    ?>
        <form  method="POST" action="">
    <input type="text" name="id" value="<?php echo $id; ?>" /><br>
    <label for="">Tamanho</label><br>
    <input type="text" name="tamanho" required value="<?php echo $tamanho; ?>" /><br>

    <label for="">Cor</label><br>
    <input type="text" name="cor" required value="<?php echo $cor; ?>" /><br>

    <label for="">Memoria</label><br>
    <input type="text" name="memoria" required  value="<?php echo $memoria; ?>" /><br>

    <label for="">Processador</label><br>
    <input type="text" name="processador" required  value="<?php echo $processador; ?>" /><br>

    <label for="">Placa Mãe</label><br>
    <input type="text" name="placamae" required  value="<?php echo $placamae; ?>" /><br>

    <label for="">Fonte Alimentação</label><br>
    <input type="text" name="fonte" required  value="<?php echo $fontealimentacao; ?>" /><br>

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
   
    <?php


    } else {
        $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Computador não encontrado!</p>";
        
    }
    ?>

</body>

</html>