<?php
session_start();
$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_GET, "email", FILTER_SANITIZE_STRING);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freezer</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="..//css//geral_css.css">
    <style>

    </style>
</head>
<body>
<?php
/* conexão com o banco de dados */
require("..//conn/conn.php");
require("cadastrofreezer.php");
/* Recebendo os valores pelo vetor */
$formData = filter_input_array(INPUT_POST,FILTER_DEFAULT);
    /* if cuja condição verifica o input do botão de cadastro pelo usuário */ 
if(!empty($formData['addfreezer'])) {
    $createfreezer = new freezer();
    $createfreezer->formData = $formData;
    $result = $createfreezer->create();
    if($result){
        $_SESSION['msgSucesso'] = "Sucesso ao cadastrar!";
    }
    else{
        $_SESSION['msgFail']="Falha ao cadastrar!";
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

<nav class="navbar navbar-expand-sm bg-body-tertiary">
<?php
    echo '
    <div class="container-fluid">
      <a class="navbar-brand" href="home_page.php?email='.$email.'"><img src="..//img//logo.png" width="120px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home_page.php?email='.$email.'">Início</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="geladeira1.php?email='.$email.'">Geladeira</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="freezer1.php?email='.$email.'">Freezer</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Cadastro
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="formgeladeira.php?email='.$email.'">GELADEIRA</a></li>
                  <li><a class="dropdown-item" href="formfreezer.php?email='.$email.'">FREEZER</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Exibir
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="viewgeladeira.php?email='.$email.'">GELADEIRA</a></li>
                  <li><a class="dropdown-item" href="viewfreezer.php?email='.$email.'">FREEZER</a></li>
                  <li><a class="dropdown-item" href="view_contato.php?email='.$email.'">FEEDBACK</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="contato.php?email='.$email.'">Contato</a>
              </li>
        </ul>
      </div>';
      ?>
      <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <?php echo $email;?>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../Login_cadastro/login.php">Sair</a></li>
          </ul>
          
        </div><p>      </p>
    </div>
  </nav>
<div class="form">
    <form action="" method="POST">
      <center>
    <h2>Cadastro de Freezer</h2>
    </center>
    <br>
    <table>
      <tr>
        <td><label><h5>Código:</h5></label><br><input type="text" name="codigo" required></td>
        <td><label><h5>Marca:</h5></label><br><input type="text" name="marca" required></td>
        <td><label><h5>Fabricante:</h5></label><br><input type="text" name="fabricante" required></td>
      </tr>
      <tr>
        <td><label><h5>Dimensão:</h5></label><br><input type="text" name="dimensao" required></td>
        <td><label><h5>Capacidade:</h5></label><br><input type="text" name="capacidade" required></td>
        <td><label><h5>Tipo:</h5></label><br><input type="text" name="tipo" required></td>
      </tr>
      <tr>
        <td><label><h5>Peso:</h5></label><br><input type="text" name="peso" required></td>
        <td><label><h5>Voltagem:</h5></label><br><input type="text" name="voltagem" required></td>
        <td><label><h5>Cor:</h5></label><br><input type="text" name="cor" required></td>
      </tr>
      <tr>
        <td><label><h5>Consumo:</h5></label><br><input type="text" name="consumo" required></td>
        <td><label><h5>Portas:</h5></label><br><input type="text" name="portas" required></td>
        <td><label><h5>Prateleiras:</h5></label><br><input type="text" name="prateleiras" required></td>
      </tr>
      <tr>
        <td><label><h5>Tipo/Prateleiras:</h5></label><br><input type="text" name="tipoprateleiras" required></td>
        <td><label><h5>Congelamento Rápido:</h5></label><br><input type="text" name="congelamentorapido" required></td>
        <td><label><h5>Controle de Temperatura:</h5></label><br><input type="text" name="controletemperatura" required></td>
      </tr>
      <tr>
        <td><label><h5>Ambiente:</h5></label><br><input type="text" name="ambiente" required></td>
        <td><label><h5>Dupla Função:</h5></label><br><input type="text" name="duplafuncao" required></td>
        <td><label><h5>Gavetas:</h5></label><br><input type="text" name="gavetas" required></td>
      </tr>
      <tr>
        <td><label><h5>Preço:</h5></label><br><input type="text" name="preco" required></td>
        <td><label><h5>Quantidade:</h5></label><br><input type="text" name="quantidade" required></td>
        <td><label><h5>Quantidade Mínima:</h5></label><br><input type="text" name="quantidademin" required></td>
      </tr>
    </table>
    <br>
    <center>
    <input value="ENVIAR" class="sub" type="submit" name="addfreezer">
    </center>
  </form>
    </div>
</body>
</html>