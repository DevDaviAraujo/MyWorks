<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="button.css">
    <title>Feminino Vestidos</title>
    <link rel="shortcut icon" href="ICONES\icons8-vestido-leve-64.png" type="image/x-icon">
    <style>
        .logo{
            width: 250px;
            float: top  ;
            height: 250px ;
            z-index: 1; 
        }
        body{
            background-image: url(./IMAGENS/phone-wallpaper-g954d0f94b_1280.jpg);
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
            <a class="navigation" href="#">About</a>
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
                <input type="text" placeholder="Usuario" name="nome" class="input"required><br><br>
                <input type="password" placeholder="Senha" name="password" class="input"required><br><br>
                <input type="submit" class="btn btn-dark" data-bs-dismiss="modal" style="margin-right: 10px;" name="botao" required ></input> 
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
                <h4 class="modal-title">Register</h4><br><br>
                <input type="text" placeholder="User" class="input"><br><br>
                <input type="text" placeholder="Email" class="input"><br><br>
                <input type="text" placeholder="Password" class="input"><br><br>
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal" style="margin-right: 10px;">Register</button> 
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
            </div>
      
          </div>
        </div>
      </div>

      <div class="divContainer">
        <div class="display-4 text-white text-center">Women's ware </div> <br> <br>
      <div class="container text-center">
        <div class="row">
          <div class="col">
            <div class="card" style="width: 18rem;">
              <img style="border-radius: 10px;" src="IMAGENS/woman-g0bfd8b51b_1280.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">vestido longo headline.</h5>
                <p class="card-text">R$ 299,99</p>
  
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem;">
              <img style="border-radius: 10px;" src="IMAGENS/portrait-g65e23b3da_1280.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">vestido darkaware mkIII.</h5>
                <p class="card-text">R$ 259,99</p>
  
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card" style="width: 18rem;">
              <img style="border-radius: 10px;" src="IMAGENS/WhatsApp Image 2023-05-18 at 16.24.29.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">vestido tomara que caia branco colado.</h5>
                <p class="card-text">R$ 199,99</p>
  
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card" style="width: 18rem;">
              <img style="border-radius: 10px;" src="IMAGENS/WhatsApp Image 2023-05-18 at 16.28.28.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">vestido allblack undershort.</h5>
                <p class="card-text">R$ 229,99</p>
  
              </div>
            </div>
          </div>
          <br>
          <p></p>

          <div class="col">
            <div class="card" style="width: 18rem;">
              <img style="border-radius: 10px;" src="IMAGENS\WhatsApp Image 2023-05-19 at 13.40.18.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">vestido colado franzido com gliter.</h5>
                <p class="card-text">R$ 289,99</p>
  
              </div>
            </div>
          </div>
          
                <div class="col">
                  <div class="card" style="width: 18rem;">
                    <img style="border-radius: 10px;" src="IMAGENS\woman-gb71a65021_1280.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">vestido manga 7/8 com detalhe v-2 tiras nas costas cor mostarda.</h5>
                      <p class="card-text">R$ 300,00</p>
        
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="card" style="width: 18rem;">
                    <img style="border-radius: 10px;" src="IMAGENS/WhatsApp Image 2023-05-18 at 16.28.28 (1).jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">blusa long size blood diamonds.</h5>
                      <p class="card-text">R$ 249,99</p>
        
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="card" style="width: 18rem;">
                    <img style="border-radius: 10px;" src="IMAGENS\WhatsApp Image 2023-05-18 at 16.24.46.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">mini saia recortes - hand lace.</h5>
                      <p class="card-text">R$ 239,99</p>
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="card" style="width: 18rem;">
                    <img style="border-radius: 10px;" src="IMAGENS\WhatsApp Image 2023-05-22 at 13.32.22.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">vestido mid evasê azul forrado em lese.</h5>
                      <p class="card-text">R$ 559,99</p>
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="card" style="width: 18rem;">
                    <img style="border-radius: 10px;" src="IMAGENS\WhatsApp Image 2023-05-22 at 14.49.18.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">vestido mid floral olivette verde.</h5>
                      <p class="card-text">R$ 499,99</p>
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
          <li class="page-item"><a class="page-link" href="CATALOGO PAG 1.php">1</a></li>
          <li class="page-item"><a class="page-link" href="CATALOGO PAG 3.php">2</a></li>

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