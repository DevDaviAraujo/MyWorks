<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MESA</title>
    <link rel="stylesheet" href="..//css/css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <style>
                body{
            font: normal 12pt Garamond;
            color: white;
            background-image: url(..//img/menu2.jpg);
        }
        form{
            font: normal 12pt Garamond;
            padding-bottom: 1%;
            padding-left: 8%;
            margin-left: 30%;
            margin-right: 30%;
            border: 2px solid black;
            margin-top: 2%;
            width: 40%;
            background-color:  rgb(48, 48, 48, 0.895);
            border-radius: 15px;
        }
        input{
            width: 250px;
            height: 25px;
            background: none;
            border: 0;
            border-bottom: solid 2px white;
            outline: none;
        }
        .sub{
            font: normal 12pt Garamond;
            color: white;
            border-radius: 15px;
            cursor: pointer;
            width: 250px;
            height: 30px;
            background: none;
            border: solid 2px white;
        }
        h1{
            color: white;
        }
        a{
        text-decoration: none;
        color: black;
      }
    </style>
</head>
<body>
<?php
    require_once("..//Mobilia/mesa.php");
    // Recebendo os valores em forma de array
    $formData = filter_input_array(INPUT_POST,FILTER_DEFAULT);
    // Verificando se o botão de cadastro foi acionado
    if(!empty($formData['addmesa'])){
        //Criando novo objeto e setando ao atributo formData o array
        $createmesa = new mesa();
        $createmesa->formData = $formData;
        $result = $createmesa->create();

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
    <nav class="navbar navbar-expand-lg bg-body-tertiary" class="navbar bg-dark border-bottom border-bottom-dark" data-bs-theme="dark" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="../img/mOUBLES-removebg-preview.png" alt="" style="width: 125px; height: 50px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="menu.php">INÍCIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            CADASTRAR
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="Cadastro_estante.php">ESTANTE</a></li>
            <li><a class="dropdown-item" href="Cadastro_cadeira.php">CADEIRA</a></li>
            <li><a class="dropdown-item" href="Cadastro_mesa.php">MESA</a></li>
            <li><a class="dropdown-item" href="Cadastro_sofa.php">SOFÁ</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            EXIBIR
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="exibir_cadeira.php">EXIBIR CADEIRA</a></li>
            <li><a class="dropdown-item" href="exibir_mesa.php">EXIBIR MESA</a></li>
            <li><a class="dropdown-item" href="exibir_estante.php">EXIBIR ESTANTE</a></li>
            <li><a class="dropdown-item" href="exibir_sofa.php">EXIBIR SOFÁ</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            EDITAR
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="editar_cadeira.php">EDITAR CADEIRA</a></li>
            <li><a class="dropdown-item" href="editar_mesa.php">EDITAR MESA</a></li>
            <li><a class="dropdown-item" href="editar_estante.php">EDITAR ESTANTE</a></li>
            <li><a class="dropdown-item" href="editar_sofa.php">EDITAR SOFÁ</a></li>
          </ul>
        </li>

      </ul>
      <button class="btn btn-light" type="submit"><a href="../login/Login.php">Sair</a></button>
    </div>
  </div>
</nav>
    <div class="container-sm">
        <center>
            <legend>CADASTRO DE MESA</legend>
        </center>
        <form action="" method="POST">
            <label>Dimensão:</label><br>
            <input type="text"name = "dimensao" required><br>
            <label>Cor:</label><br>
            <input type="text"name = "cor" required><br>
            <label>Marca:</label><br>  
            <input type="text"name = "marca" required><br>   
            <label>Modelo:</label><br>
            <input type="text"name = "modelo" required><br>
            <label>Material:</label><br>
            <input type="text"name = "material" required><br>
            <label>Quantidade de Pernas:</label><br>
            <input type="text"name = "quantidadepernas" required><br>
            <label>Peso:</label><br>
            <input type="text"name = "peso" required><br>
            <label>Preço:</label><br>
            <input type="text"name = "preco" required><br>
            <label>Descrição:</label><br>
            <input type="text"name = "descricao" required><br><br>
            <input type="submit" value="CADASTRAR" class="sub" name="addmesa">
        </form>
    </div>
</body>
</html>