
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <style>
      body{
        background-color: black;
      }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">INÍCIO</a>
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
      </ul>
    </div>
  </div>
</nav>
</body>
</html>