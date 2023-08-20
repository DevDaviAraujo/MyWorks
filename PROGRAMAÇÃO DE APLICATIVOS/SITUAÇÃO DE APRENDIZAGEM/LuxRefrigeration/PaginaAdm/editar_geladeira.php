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
    <link rel="stylesheet" href="..//css/geral_css.css">
</head>
<body>
    

<?php

if (isset($_SESSION['msg'])) {
  echo $_SESSION['msg'];
  unset($_SESSION['msg']);
}
//Incluir os arquivos
require_once('..//conn/conn.php');
require_once('cadastrogeladeiras.php');

//Receber os dados do formulario
$formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);

//Verificar se o usuario clicou no botao
if (!empty($formData['editar'])) {
  //var_dump($formData);
  $editgeladeira = new geladeira();
  $editgeladeira->formData = $formData;
  $value = $editgeladeira->edit();
  
    
}

//Verificar se o id possui valor
if (!empty($id)) {

  //Instanciar a classe e criar o objeto
  $viewGeladeira = new geladeira();

  //Enviando o id para o atributo id da classe geladeira
  $viewGeladeira->id = $id;

  $valueGeladeira = $viewGeladeira->view();

  extract($valueGeladeira);

  if (!empty($formData['deletar'])) {
      if (isset($_SESSION['msg'])) {
          echo $_SESSION['msg'];
          unset($_SESSION['msg']);
      }


      //Verificar se o id possui valor
      if (!empty($id)) {

          //Instanciar a classe e criar o objeto
          $deleteGeladeira = new geladeira();

          //Enviando o id para o atributo id da classe freezer
          $deleteGeladeira->id = $id;

          $deleteGeladeira = $deleteGeladeira->delete();

          header('location:viewgeladeira.php');
      
  

      } else {
          echo "<p style='color: #f00;'>Erro: Item não encontrado!</p>";
      
      }
  }
} else {
  $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Usuário não encontrado!</p>";
          
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
    <form action="" method="POST" name="editGeladeira">
      <center>
        <h2>Editar Geladeira</h2> 
      </center>
      <br>
      <table>
        <tr>
          <td><label>Código:</label><br><input value="<?php echo $codigo; ?>" type="text" name="codigo"  required></td>
          <td><label>Marca:</label><br><input value="<?php echo $marca; ?>" type="text" name="marca"  required></td>
          <td><label>Fabricante:</label><br><input type="text" name="fabricante" value="<?php echo $fabricante?>" required></td>
        </tr>
        <tr>
          <td><label>Dimensão:</label><br><input type="text" name="dimensao" value="<?php echo $dimensao; ?>" required></td>
          <td><label>Capacidade:</label><br><input type="text" name="capacidade" value="<?php echo $capacidade;?>" required></td>
          <td><label>Tipo:</label><br><input type="text" name="tipo" value="<?php echo $tipo;?>" required></td>
        </tr>
        <tr>
          <td><label>Peso:</label><br><input type="text" name="peso" value="<?php echo $peso;?>" required></td>
          <td><label>Voltagem:</label><br><input type="text" name="voltagem" value="<?php echo $voltagem;?>" required></td>
          <td><label>Cor:</label><br><input type="text" name="cor" value="<?php echo $cor;?>" required></td>
        </tr>
        <tr>
          <td><label>Consumo:</label><br><input type="text" name="consumo" value="<?php echo $consumo;?>" required></td>
          <td><label>Portas:</label><br><input type="text" name="portas" value="<?php echo $portas;?>" required></td>
          <td><label>Prateleiras:</label><br><input type="text" name="prateleiras" value="<?php echo $prateleiras;?>" required></td>
        </tr>
        <tr>
          <td><label>Tipo/Prateleiras:</label><br><input type="text" name="tipoprateleiras" value="<?php echo $tipoprateleiras;?>" required></td>
          <td><label>Preço:</label><br><input type="text" name="preco" value="<?php echo $preco;?>" required></td>
          <td><label>Quantidade:</label><br><input type="text" name="quantidade" value="<?php echo $quantidade;?>" required></td>
        </tr>
        <tr>
          <Td></Td>
          <td><label>Quantidade Mínima:</label><br><input type="text" name="quantidademin" value="<?php echo $quantidademin; ?>" required></td>
          <Td></Td>
        </tr>
      </table>
      <br>
      <center>
      <input value="Salvar" class="sub" type="submit" name="editar">
      
      <!-- Button trigger modal -->
      <input value="Deletar" class="sub" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
      

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header align-itens-center">
              <h1 class="modal-title fs-5 text-center" id="exampleModalLabel"> Atenção! </h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Este item será permanentemente deletado, deseja prosseguir?
            </div>
          <div class="modal-footer d-flex">
            <br> <br> 
            <a href="viewgeladeira.php" > 
              <input value="Deletar" class="sub bg-danger" type="submit" name="deletar"  data-bs-dismiss="modal">
            </a>
          </div>
        </div>
      </div>
    </div>
      <?php
        
        if (@$deleteGeladeira) {
          echo  "<p style='color: #f00;'>Item do inventário apagado</p>";
        }
        if (@empty($formData["editar"])) {
          exit();
        } else { 
          if(@$value){
            echo  "<p style='color: green;'>Usuário editado com sucesso!</p>";
          }else{
            echo "<p style='color: #f00;'>Erro: Usuário não editado!</p>";
          }
        }
        
        
        
      ?>


    
      
      </center>
    </form>
  </div>

</body>
</html>