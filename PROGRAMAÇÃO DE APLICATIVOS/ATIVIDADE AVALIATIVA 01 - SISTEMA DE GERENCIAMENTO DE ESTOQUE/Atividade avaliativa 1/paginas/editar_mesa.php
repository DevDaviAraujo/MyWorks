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
    <link rel="stylesheet" href="..//css/css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <style>
        * {
            font: normal 14pt verdana;
        };
        
        body {
            background-color: #363636;
        };
    </style>

</head>

<body>

<?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    //Incluir os arquivos
    require_once('..//Conn//conn.php');
    require_once('..//Mobilia//mesa.php');

    //Receber os dados do formulario
    $formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    //Verificar se o usuario clicou no botao
    if (!empty($formData['SendEditUser'])) {
        //var_dump($formData);
        $editUser = new mesa();
        $editUser->formData = $formData;
        $value = $editUser->edit();
        if($value){
            echo  "<p style='color: green;'>Usuário editado com sucesso!</p>";
        }else{
            echo "<p style='color: #f00;'>Erro: Usuário não editado com sucesso!</p>";
        }
    }

    

    //Verificar se o id possui valor
    if (!empty($id)) {

        //Instanciar a classe e criar o objeto
        $viewUser = new mesa();

        //Enviando o id para o atributo id da classe User
        $viewUser->id = $id;

        $valueUser = $viewUser->view();

        extract($valueUser);

        if (!empty($formData['deletado'])) {
            if (isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
    
     
            //Verificar se o id possui valor
            if (!empty($id)) {
    
                //Instanciar a classe e criar o objeto
                $deleteUser = new mesa();
    
                //Enviando o id para o atributo id da classe User
                $deleteUser->id = $id;
    
                $deleteUser = $deleteUser->delete();
                 echo  "<p style='color: #f00;'>Item do inventário apagado</p>";
            
        
    
            } else {
                echo "<p style='color: #f00;'>Erro: Item não encontrado!</p>";
            
            }
        }
    } else {
        $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Usuário não encontrado!</p>";
                
    }
?>    


    <div class="container_fluid text_center">
    <center> <br> <br>
    <p>Editar o Mesa</p>
    </center>
        <form name="EditUser" method="POST" action="">
            <input type="hidden" name="id" value="<?php echo $id; ?>" /> <br>

            <label>Dimensao: </label>
            <input type="text" name="dimensao" value="<?php echo $dimensao; ?>" required /><br><br>
            <label>Cor: </label>
            <input type="text" name="cor" value="<?php echo $cor; ?>" required /><br><br>
            <label>Marca: </label>
            <input type="text" name="marca" value="<?php echo $marca; ?>" required /><br><br>
            <label>Modelo: </label>
            <input type="text" name="modelo" value="<?php echo $modelo; ?>" required /><br><br>
            <label>Material: </label>
            <input type="text" name="material" value="<?php echo $material; ?>" required /><br><br>
            <label>Quantidade de Pernas: </label>
            <input type="text" name="quantidadepernas" value="<?php echo $quantidadepernas; ?>" required /><br><br>
            <label>Peso: </label>
            <input type="text" name="peso" value="<?php echo $peso; ?>" required /><br><br>
            <label>Descrição: </label>
            <input type="text" name="descricao" value="<?php echo $descricao; ?>" required /><br><br>
            <label>Preço: </label>
            <input type="text" name="preco" value="<?php echo $preco; ?>" required /><br><br>

            <div class="row">
                <div class="col">
                    <a href="exibir_mesa.php"> 
                        <button class="btn btn-primary" type="button" value="Voltar" href="exibir_estante.php"> Voltar </button>
                    <a>
                </div>
            </div>   <br> 
            <div class="row">
                <div class="col-sm-3">
                    <button class="btn btn-primary" type="submit" value="Editar" name="SendEditUser">Editar</button> <br> <br> <br>
                </div>
                <div class="col-sm-3 align_itens_end ">
                    <button class="btn btn-primary bg-danger" type="submit" value="Deletar" name="deletado" > Deletar</button>  <br>
                </div>
            </div>
        </form> 
    </div>
</body>

</html>