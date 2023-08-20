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

            <div class="col">
              <div class="card shadow-sm">
                <img class="bd-placeholder-img card-img-top" src="..//img//Freezer/fre4.jfif" alt="">
                <div class="card-body">
                  <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Freezer Vertical Consul 1 Porta 246L - CVU30FB  </font></font></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comprar</font></font></button>
                    </div>
                    <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">R$ 4.207,55</font></font></small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img class="bd-placeholder-img card-img-top" src="..//img//Freezer/fre5.jfif" alt="">
                <div class="card-body">
                  <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Freezer Horizontal Consul 2 portas 414L CHB42FB </font></font></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comprar</font></font></button>
                    </div>
                    <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">R$ 2.564,14</font></font></small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img class="bd-placeholder-img card-img-top" src="..//img//Freezer/fre6.jfif" alt="">
                <div class="card-body">
                  <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Freezer Horizontal Philco 255L PFH310EB Dupla Função  </font></font></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comprar</font></font></button>
                    </div>
                    <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">R$ 2.899,90</font></font></small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img class="bd-placeholder-img card-img-top" src="..//img//Freezer/fre7.jfif" alt="">
                <div class="card-body">
                  <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Freezer e Refrigerador Philco PFV300I Vertical 232L Inox  </font></font></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comprar</font></font></button>
                    </div>
                    <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">R$ 4.399,90</font></font></small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img class="bd-placeholder-img card-img-top" src="..//img//Freezer/fre8.jfif" alt="">
                <div class="card-body">
                  <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Freezer e Refrigerador Philco PFH515B 492L Horizontal Branco </font></font></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comprar</font></font></button>
                    </div>
                    <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">R$ 5.979,90</font></font></small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img class="bd-placeholder-img card-img-top" src="..//img//Freezer/fre9.jfif" alt="">
                <div class="card-body">
                  <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Freezer Philco Horizontal PFH260B </font></font></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comprar</font></font></button>
                    </div>
                    <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">R$ 2.929,90</font></font></small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img class="bd-placeholder-img card-img-top" src="..//img//Freezer/fre10.jfif" alt="">
                <div class="card-body">
                  <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Freezer Philco Horizontal PFZ330B 295L - Refrigerador </font></font></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comprar</font></font></button>
                    </div>
                    <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">R$ 2.599,90</font></font></small>
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
          <?php echo '
          <a class="page-link" href="freezer1.php?email='.$email.'" aria-label="Previous">

            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <li class="page-item"><a class="page-link" href="freezer1.php?email='.$email.'">1</a></li>
        <li class="page-item"><a class="page-link" href="freezer2.php?email='.$email.'">2</a></li>
        <li class="page-item">
          <a class="page-link" href="freezer2.php?email='.$email.'" aria-label="Next">
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