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
  <title>Início</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="..//css/geral_css.css">
</head>
<body>
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
  <?php
  if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
  }

  require_once ("..//conn/conn.php");
  require_once("listfreezer.php");

  $listfreezer = new listfreezer();
  $result_freezer = $listfreezer->list();

  echo "<div class='table-responsive'>
  <table class='table'>
  <thead>
  <tr>
    <th scope='col'>Código</th>
    <th scope='col'>Marca</th>
    <th scope='col'>Fabricante</th>
    <th scope='col'>Dimensão</th>
    <th scope='col'>Capacidade</th>
    <th scope='col'>Tipo</th>
    <th scope='col'>Peso</th>
    <th scope='col'>Voltagem</th>
    <th scope='col'>Cor</th>
    <th scope='col'>Consumo</th>
    <th scope='col'>Portas</th>
    <th scope='col'>Prateleiras</th>
    <th scope='col'>Tipo/<br>Prateleiras</th>
    <th scope='col'>Congelamento<br>Rápido</th>
    <th scope='col'>Controle de<br>Temperatura</th>
    <th scope='col'>Ambiente</th>
    <th scope='col'>Dupla<br>Função</th>
    <th scope='col'>Gavetas</th>
    <th scope='col'>Preço</th>
    <th scope='col'>Quantidade</th>
    <th scope='col'>Quantidade<br>miníma</th>
    <th></th>
  </tr>
  </thead>
  <tbody>";

  foreach ($result_freezer as $row_freezer) {

    extract($row_freezer);
    echo "
    <tr>
    <th scope='row'>$codigo</th>
    <td> $marca</td>
    <td> $fabricante</td>
    <td> $dimensao</td>
    <td> $capacidade</td>
    <td> $tipo</td>
    <td> $peso</td>
    <td> $voltagem</td>
    <td> $cor</td>
    <td> $consumo</td>
    <td> $portas</td>
    <td> $prateleiras</td>
    <td> $tipoprateleiras</td>
    <td> $congelamentorapido</td>
    <td> $controletemperatura</td>
    <td> $ambiente</td>
    <td> $duplafuncao</td>
    <td> $gavetas</td>
    <td> $preco</td>
    <td> $quantidade</td>
    <td> $quantidademin</td>
    <td> <a href='editar_freezer.php?id=$codigo'><img src='..//img//lapis3.png' alt=''></a> </td>
    </tr>";
  }
  echo "</tbody>
  </table>
  </div>";
  ?>
</body>
</html>