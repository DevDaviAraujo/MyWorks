<?php
session_start();
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
    <div class="album py-5">
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

            <div class="col">
              <div class="card shadow-sm">
                <img class="bd-placeholder-img card-img-top" src="..//img//Freezer/fre11.jfif" alt="">
                <div class="card-body">
                  <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Freezer Freezer Electrolux Vertical Uma Porta 234L (FE27) Vertical FE27 </font></font></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comprar</font></font></button>
                    </div>
                    <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">R$ 2.899,00</font></font></small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img class="bd-placeholder-img card-img-top" src="..//img//Freezer/fre12.jfif" alt="">
                <div class="card-body">
                  <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Freezer Horizontal Electrolux 400L (H440) </font></font></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comprar</font></font></button>
                    </div>
                    <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">R$ 2.899,00</font></font></small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img class="bd-placeholder-img card-img-top" src="..//img//Freezer/fre13.jfif" alt="">
                <div class="card-body">
                  <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Freezer Horizontal Electrolux 314L (H330) </font></font></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comprar</font></font></button>
                    </div>
                    <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">R$ 2.499,00</font></font></small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img class="bd-placeholder-img card-img-top" src="..//img//Freezer/fre14.jfif" alt="">
                <div class="card-body">
                  <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Freezer Horizontal 3 em 1 Branco 100L Midea </font></font></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comprar</font></font></button>
                    </div>
                    <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">R$ 2.199,00</font></font></small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img class="bd-placeholder-img card-img-top" src="..//img//Freezer/fre15.jfif" alt="">
                <div class="card-body">
                  <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Freezer Horizontal Electrolux 143L (HE150)  </font></font></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comprar</font></font></button>
                    </div>
                    <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">R$ 10.499,00</font></font></small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img class="bd-placeholder-img card-img-top" src="..//img//Freezer/fre16.jfif" alt="">
                <div class="card-body">
                  <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Freezer Electrolux 262L Experience Com Inverter Twins cor Inox (FTI4S)  </font></font></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comprar</font></font></button>
                    </div>
                    <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">R$ 2.003,55</font></font></small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img class="bd-placeholder-img card-img-top" src="..//img//Freezer/fre17.jfif" alt="">
                <div class="card-body">
                  <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Freezer Horizontal 3 em 1 Branco 205L   </font></font></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comprar</font></font></button>
                    </div>
                    <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">R$ 1.519,05</font></font></small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img class="bd-placeholder-img card-img-top" src="..//img//Freezer/fre18.jfif" alt="">
                <div class="card-body">
                  <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Freezer Horizontal Digital FlexBeer Preto  </font></font></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comprar</font></font></button>
                    </div>
                    <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">R$ 1.614,05</font></font></small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img class="bd-placeholder-img card-img-top" src="..//img//Freezer/fre19.jfif" alt="">
                <div class="card-body">
                  <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Freezer Horizontal 3 em 1 Branco 150L  </font></font></p>
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
                <img class="bd-placeholder-img card-img-top" src="..//img//Freezer/fre20.jfif" alt="">
                <div class="card-body">
                  <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Freezer Horizontal 4 funções Branco 295L Midea </font></font></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comprar</font></font></button>
                    </div>
                    <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">R$ 2.260,05</font></font></small>
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
              <a class="page-link" href="freezer1.php" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="freezer1.php">1</a></li>
            <li class="page-item"><a class="page-link" href="freezer2.php">2</a></li>
            <li class="page-item">
              <a class="page-link" href="freezer2.php" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </center>


</body>
</html>