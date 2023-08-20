<?php
session_start();
$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_GET, "email", FILTER_SANITIZE_STRING);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="..//css//geral_css.css">
    <style>
    body{
      font-family: Georgia, 'Times New Roman', Times, serif, Helvetica, sans-serif;
    }
    </style>
  </head>
<body>
<?php
if (isset($_SESSION['msg'])) {
  echo $_SESSION['msg'];
  unset($_SESSION['msg']);
}

require_once("../Login_cadastro/usuario.php");

if (!empty($id)) {

  //Instanciar a classe e criar o objeto
  $viewFreezer = new usuario();

  //Enviando o id para o atributo id da classe freezer
  $viewFreezer->id =$id;

  $valueFreezer = $viewFreezer->view();

  extract($valueFreezer);
  
  
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
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="contato.php?email='.$email.'">Contato</a>
              </li>
        </ul>
      </div>
      ';
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

  <div class="container text-center">
      <p><h1 style="background: white">Lux Refrigeration</h1></p>
  </div>

  <div class="album py-5">
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

            <div class="col">
              <div class="card shadow-sm">
                <img class="bd-placeholder-img card-img-top" src="..//img//Geladeira/gel1.jfif" alt="">
                <div class="card-body">
                  <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Geladeira Electrolux Frost Free Inverter 400L AutoSense Inverse Cor Inox Look (IB45S) </font></font></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comprar</font></font></button>
                    </div>
                    <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">R$ 4.099,00</font></font></small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img class="bd-placeholder-img card-img-top" src="..//img//Geladeira/gel2.jfif" alt="">
                <div class="card-body">
                  <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Geladeira Electrolux Frost Free Inverter 590L AutoSense 3 Portas Cor Inox Look (IM8S) </font></font></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comprar</font></font></button>
                    </div>
                    <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">R$ 6.859,00</font></font></small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img class="bd-placeholder-img card-img-top" src="..//img//Geladeira/gel3.jfif" alt="">
                <div class="card-body">
                  <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Geladeira Electrolux Frost Free Inverter 538L Efficient 3 Portas Cor Preta (DM86V) </font></font></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comprar</font></font></button>
                    </div>
                    <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">R$ 18.299,00</font></font></small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><br><br>
        <?php
        echo"
        <div class='conteiner-fluid text-center'>
        <a href='geladeira1.php?email=$email'><button type='button' class='button-35'>VER MAIS</button></a>
        </div>
        "
        ?>
        <div class="album py-5">
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

            <div class="col">
              <div class="card shadow-sm">
                <img class="bd-placeholder-img card-img-top" src="..//img//Freezer/fre1.jfif" alt="">
                <div class="card-body">
                  <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Freezer Horizontal Consul 2 portas 534L - CHB53EB </font></font></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comprar</font></font></button>
                    </div>
                    <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">R$ 3.421,47</font></font></small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img class="bd-placeholder-img card-img-top" src="..//img//Freezer/fre2.jfif" alt="">
                <div class="card-body">
                  <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Freezer Horizontal Consul 220L CHA22FB </font></font></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comprar</font></font></button>
                    </div>
                    <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">R$ 2.385,00</font></font></small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img class="bd-placeholder-img card-img-top" src="..//img//Freezer/fre3.jfif" alt="">
                <div class="card-body">
                  <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Freezer Vertical Consul 121 Litros - CVU18GB </font></font></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comprar</font></font></button>
                    </div>
                    <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">R$ 1.994,05</font></font></small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br><br>
        <?php
        echo"
        <div class='conteiner-fluid text-center'>
        <a href='freezer1.php?email=$email'><button type='button' class='button-35'>VER MAIS</button></a>
        </div>
        "
        ?>
  </body>
  </html>