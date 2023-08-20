<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Listar</title>
    <link rel="stylesheet" href="..//css/css_exibircadeira.css">
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
    <center>
    <h1>Listar Sofá</h1>
    </center>
    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

    require_once ("..//Conn/conn.php");
    require_once("..//Lista/list_sofa.php");

    $listcadeira = new Listsofa();
    $result_cadeira = $listcadeira->list();

    echo "<table class='table table-hover table-bordered table-sm'>
    <thead>
      <tr>
        <th scope='col' class='text-center'>ID</th>
        <th scope='col' class='text-center'>Dimensão</th>
        <th scope='col' class='text-center'>Cor</th>
        <th scope='col' class='text-center'>Marca</th>
        <th scope='col' class='text-center'>Modelo</th>
        <th scope='col' class='text-center'>Material</th>
        <th scope='col' class='text-center'>Peso</th>
        <th scope='col' class='text-center'>Lugares</th>
        <th scope='col' class='text-center'>Preço</th>
      </tr>
    </thead>";
    foreach ($result_cadeira as $row_cadeira) {
        
    
        //var_dump($row_user);

        extract($row_cadeira);
        
        echo "<tr>
        <td class='text-center'>$id</td>
        <td class='text-center'>$dimensao</td>
        <td class='text-center'>$cor</td>
        <td class='text-center'>$marca</td>
        <td class='text-center'>$modelo</td>
        <td class='text-center'>$material</td>
        <td class='text-center'>$peso</td>
        <td class='text-center'>$lugares</td>
        <td class='text-center'>$preco</td>
        <td class='text-center'>EDITAR</td>
        <td class='text-center'>EXCLUIR</td>
        </tr>";
    }
    echo "</table>";
    ?>

</body>
</html>