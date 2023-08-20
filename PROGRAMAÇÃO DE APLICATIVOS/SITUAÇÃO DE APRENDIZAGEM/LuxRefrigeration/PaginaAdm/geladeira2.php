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
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="..//css//geral_css.css">
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

    <div class="album py-5">
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

            <div class="col">
              <div class="card shadow-sm">
                <img class="bd-placeholder-img card-img-top" src="..//img//Geladeira/gel11.jfif" alt="">
                <div class="card-body">
                  <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Geladeira Side by Side RS60B com All Around Cooling™ e SpaceMax™ 626L </font></font></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comprar</font></font></button>
                    </div>
                    <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">R$ 9.499,05</font></font></small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img class="bd-placeholder-img card-img-top" src="..//img//Geladeira/gel12.jfif" alt="">
                <div class="card-body">
                  <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Geladeira Family Hub™ Side By Side RS58 com Soundbar 585L Black Inox </font></font></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comprar</font></font></button>
                    </div>
                    <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">R$ 18.999,05</font></font></small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img class="bd-placeholder-img card-img-top" src="..//img//Geladeira/gel13.jfif" alt="">
                <div class="card-body">
                  <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Geladeira Family Hub Smart French Door RF27 com Soundbar 614L Black Inox </font></font></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comprar</font></font></button>
                    </div>
                    <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">R$ 22.590,00</font></font></small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img class="bd-placeholder-img card-img-top" src="..//img//Geladeira/gel14.jfif" alt="">
                <div class="card-body">
                  <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Geladeira Bespoke 328L Duplex Inverse </font></font></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comprar</font></font></button>
                    </div>
                    <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">R$ 9.999,00</font></font></small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img class="bd-placeholder-img card-img-top" src="..//img//Geladeira/gel15.jfif" alt="">
                <div class="card-body">
                  <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Geladeira Family Hub Smart French Door RF27 com Soundbar 614L Black Inox </font></font></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comprar</font></font></button>
                    </div>
                    <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">R$ 22.590,00</font></font></small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img class="bd-placeholder-img card-img-top" src="..//img//Geladeira/gel16.jfif" alt="">
                <div class="card-body">
                  <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Geladeira Panasonic Frost Free 397L A+++ Black Glass - NR-BB41GV1B </font></font></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comprar</font></font></button>
                    </div>
                    <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">R$ 4.679,00</font></font></small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img class="bd-placeholder-img card-img-top" src="..//img//Geladeira/gel17.jfif" alt="">
                <div class="card-body">
                  <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Geladeira Panasonic A+++ Frost Free 387L Titânio - NR-BT43PV1T </font></font></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comprar</font></font></button>
                    </div>
                    <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">R$ 3.509,00</font></font></small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img class="bd-placeholder-img card-img-top" src="..//img//Geladeira/gel18.jfif" alt="">
                <div class="card-body">
                  <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Geladeira Panasonic Frost Free 425L A+++ White Glass - NR-BB53GV3W </font></font></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comprar</font></font></button>
                    </div>
                    <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">R$ 4.599,00</font></font></small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img class="bd-placeholder-img card-img-top" src="..//img//Geladeira/gel19.jfif" alt="">
                <div class="card-body">
                  <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Geladeira Panasonic A+++ Frost Free 387L - Branco- NR-BT41PD1W </font></font></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comprar</font></font></button>
                    </div>
                    <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">R$ 3.059,00</font></font></small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img class="bd-placeholder-img card-img-top" src="..//img//Geladeira/gel20.jfif" alt="">
                <div class="card-body">
                  <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Geladeira Panasonic Frost Free 425L A+++ Diamond Glass - NR-BB53GV3M </font></font></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comprar</font></font></button>
                    </div>
                    <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">R$ 6.399,00</font></font></small>
                  </div>
                </div>
              </div>
            </div>
          
          </div>
        </div>
      </div>
      <br>
      
      <center>
      <div style="width: 5px; height: 10px; margin-top: 5px;">
        <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item">
              <?php 
              echo'
              <a class="page-link" href="geladeira1.php?email='.$email.'" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="geladeira1.php?email='.$email.'">1</a></li>
            <li class="page-item"><a class="page-link" href="geladeira2.php?email='.$email.'">2</a></li>
            <li class="page-item">
              <a class="page-link" href="geladeira2.php?email='.$email.'" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
            ';
            ?>
          </ul>
        </nav>
      </div>
    </center>

</body>
</html>