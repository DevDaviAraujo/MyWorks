<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="button.css">
    <title>Masculino Calças & Bermudas</title>
    <link rel="shortcut icon" href="ICONES\icons8-camisa-64.png" type="image/x-icon">
    <style>
        .logo{
            width: 250px;
            float: top  ;
            height: 250px ;
            z-index: 1; 
        }
        body{
            background-image: url(./IMAGENS/terno1.jpg);
            background-size: cover;
        }
        
        .divContainer{
          width: 100%;
          margin-top: 5px;
        }
        .navigation{
            position: relative;
            font-size: 1.1em;
            color: rgb(255, 254, 254);
            cursor: pointer;
            font-weight: 500;
            margin-left: 110px;
            margin-top: -400px;
            text-align: center;
            text-decoration: none;
        }
        .navigation:hover{
          text-decoration: none;
          opacity: 0.6;
          transition:.5s;
          
        }
        .navigation:hover ::after{
            transform: scaleX(1);
        }

        
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center">
        <img class="logo" src=".//IMAGENS/LUX (1)_preview_rev_1.png" alt="">
        <nav style="margin-top: 30px;">
            <a class="navigation" href="HOME.php">Home</a>
            <a class="navigation" href="ABOUT.php">About</a>
            <div class="dropdown" style="width: 10%; display: inline-block; padding-left: 30px;">
              <ul style="text-decoration: none width;" class=" text-white" type="button" id="dropdownMenu" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="h6">Catalog</div> 
              </ul>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu">

                <li><a href="CATALOGO PAG 1 Man.php" class="dropdown-item" type="button"><div class="h6" >Masculine</div> </a></li>
                <li><a href="CATALOGO PAG 1.php"class="dropdown-item" type="button"><div class="h6" >Feminine</div> </a></li>
              </ul>
            </div>
            <a class="navigation" href="CONTATO.php">Contact</a>
            <a class="navigation" href="#" data-bs-toggle="modal" data-bs-target="#myModal">Login</a>
            <a class="navigation" href="#" data-bs-toggle="modal" data-bs-target="#myModal2">Register</a>
        
        </nav>
    </div> 
      <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">

            <div class="modal-body text-center">
              <form name="criarusuario" method="post" action="">
                <h4 class="modal-title">Login</h4><br><br>
                <input type="text" placeholder="Usuario" class="input"><br><br>
                <input type="password" placeholder="Senha"  class="input"><br><br>
                <input type="submit" class="btn btn-dark" data-bs-dismiss="modal" style="margin-right: 10px;" ></input> 
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
              </form>
            </div>
      
          </div>
        </div>
      </div>
      <div class="modal fade" id="myModal2">
        <div class="modal-dialog modal-md modal-dialog-centered">
          <div class="modal-content">

            <div class="modal-body text-center">
            <form name="criarusuario" method="post" action="">
                <h4 class="modal-title">Register</h4><br><br>
                <input type="text" placeholder="Usuario" name="nome" class="input"required><br><br>
                <input type="email" placeholder="E-mail" name="email" class="input"required><br><br>
                <input type="password" placeholder="Senha" name="password" class="input"required><br><br>
                
                <input type="submit" class="btn btn-dark" data-bs-dismiss="modal" style="margin-right: 10px;" name="botao" required ></input> 
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
              </form>
            </div>
      
          </div>
        </div>
      </div>

      <div class="divContainer">
        <div class="display-5 text-white text-center">Men's ware </div> <br> <br>
      <div class="container text-center">
        <div class="row">
          <div class="col">
            <div class="card" style="width: 18rem;" >
              <img style="border-radius: 10px;" src="IMAGENS\Images calças\WhatsApp Image 2023-05-22 at 14.50.33.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">bermuda cargo masculina tactel esportiva basica.</h5>
                <p class="card-text">R$ 99,99</p>
  
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem;">
              <img style="border-radius: 10px;" src="IMAGENS\Images calças\WhatsApp Image 2023-05-22 at 14.50.34.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">bermuda loose jeans mega destroyeds azul.</h5>
                <p class="card-text">R$ 119,90</p>
  
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card" style="width: 18rem;">
              <img style="border-radius: 10px;" src="IMAGENS\Images calças\WhatsApp Image 2023-05-22 at 14.50.34 (1).jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">bermuda jeans masculina mega premium blue dark.</h5>
                <p class="card-text">R$ 89,99</p>
  
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card" style="width: 18rem;">
              <img style="border-radius: 10px;" src="IMAGENS\Images calças\WhatsApp Image 2023-05-22 at 14.50.34 (2).jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">bermuda jeans basica masuclina hering H4D4.</h5>
                <p class="card-text">R$ 149,99</p>
  
              </div>
            </div>
          </div>
          <br>
          <p></p>

          <div class="col">
            <div class="card" style="width: 18rem;">
              <img style="border-radius: 10px;" src="IMAGENS\Images calças\WhatsApp Image 2023-05-22 at 14.50.35.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">bermuda jeans oceano new york eko.</h5>
                <p class="card-text">R$ 299,99</p>
  
              </div>
            </div>
          </div>
          
                <div class="col">
                  <div class="card" style="width: 18rem;">
                    <img style="border-radius: 10px;" src="IMAGENS\Images calças\WhatsApp Image 2023-05-22 at 14.50.35 (1).jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">calça masculina jogger jeans escuro.</h5>
                      <p class="card-text">R$ 99,99</p>
        
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="card" style="width: 18rem;">
                    <img style="border-radius: 10px;" src="IMAGENS\Images calças\WhatsApp Image 2023-05-22 at 14.50.35 (2).jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">calça jeans masculina jay jones destroid C/bordado M.</h5>
                      <p class="card-text">R$ 279,99</p>
        
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="card" style="width: 18rem;">
                    <img  src="IMAGENS\Images calças\WhatsApp Image 2023-05-22 at 14.50.36.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">calça jeans super skinny masulina marmorizada JJ.</h5>
                      <p class="card-text">R$ 229,99</p>
        
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="card" style="width: 18rem;">
                    <img  src="IMAGENS\Images calças\WhatsApp Image 2023-05-22 at 14.51.12.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">calça de sarja jogger cargo com bolsos marrom.</h5>
                      <p class="card-text">R$ 249,99</p>
        
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="card" style="width: 18rem;">
                    <img  src="IMAGENS\Images calças\WhatsApp Image 2023-05-22 at 14.51.12 (1).jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">calça cargo de sarja verde.</h5>
                      <p class="card-text">R$ 199,99</p>
        
                    </div>
                  </div>
                </div>
        </div>
      </div>
      </div>
      <br>
      <div style="margin-top: 30px; margin-left: 550px;">
        <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="CATALOGO PAG 1 Man.php">1</a></li>
            <li class="page-item"><a class="page-link" href="CATALOGO PAG 3 Man.php">2</a></li>
  
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
        </div>
    <center>
      <p style="color:rgb(255, 255, 255); margin-top:10%;">Desenvolvido por Vinicius Rodrigues, Arthur Nunes , Samuel Ferreira, Davi Santos, Marcus, Alex, Nathan, Marcelo e João Victor.</p>
    </center>
  
</body>
</html>