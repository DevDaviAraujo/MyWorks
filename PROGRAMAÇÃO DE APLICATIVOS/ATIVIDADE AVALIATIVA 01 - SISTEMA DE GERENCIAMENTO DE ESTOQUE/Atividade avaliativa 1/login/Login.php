<?php
include ('conexao.php');
//condição para caso email ou senha estiverem vazio, exibir a menssagem preencha o seu e-mail/preencha sua senha
if(isset($_POST['email']) || isset($_POST['senha'])){

    if(strlen($_POST['email']) == 0 ){
        echo "Preencha seu E-mail";
    }
    elseif(strlen($_POST['senha']) == 0 ){
        echo "Preencha sua senha";
        }
    else{
         $email = $mysqli->real_escape_string($_POST['email']);
         $senha = $mysqli->real_escape_string($_POST['senha']);
    
//condição / variavel para efutuar a conexão com o banco e vericar se existe o cadastro do usuario no banco de dados
    $sql_code = "SELECT * FROM usuario WHERE email ='$email' AND senha = '$senha'";
    $sql_query =$mysqli->query($sql_code) or die("falha na execução do código SQL: " . $mysqli->error);


    $quantidade = $sql_query->num_rows;

    if($quantidade == 1) {

        $usuario = $sql_query->fetch_assoc();

        if(!isset($_SESSION)) 
          session_start();


        $_SESSION['id'] = $usuario['id'];
        $_SESSION['email'] = $usuario['email'];
       

        header("Location: menu.php");
    }$email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

//condição / variavel para efutuar a conexão com o banco e vericar se existe o cadastro do usuario no banco de dados
$sql_code = "SELECT * FROM usuario WHERE email ='$email' AND senha = '$senha' AND adm = '1'";
$sql_query =$mysqli->query($sql_code) or die("falha na execução do código SQL: " . $mysqli->error);


$quantidade = $sql_query->num_rows;

if($quantidade == 1) {

   $usuario = $sql_query->fetch_assoc();

   if(!isset($_SESSION)) 
     session_start();


   $_SESSION['id'] = $usuario['id'];
   $_SESSION['email'] = $usuario['email'];
   $_SESSION['adm'] = $usuario['adm'];

   header("Location: estoqueadm.php");
}

  }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="stylelogin.css">
    
    <title>Login</title>
</head>
<body>   
    
    <div style="margin: 0;">
        <img src="..//img/mOUBLES-removebg-preview.png" alt="" class="logo" style="height: 120px;">
    </div> 
    
    <main id="container">   
    <form id="login_form"  method="POST" action="">
            <!-- FORM HEADER -->
            <div id="form_header">
                <h1>Login</h1>
                <i id="mode_icon" </i>
            </div>
                <!-- EMAIL -->
                <div class="input-box">
                    <label for="email">
                        E-mail
                        <div class="input-field">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="email" id="email" name="email">
                        </div>
                    </label>
                </div>
                
                <!-- PASSWORD -->
                <div class="input-box">
                    <label for="password">
                        Senha
                        <div class="input-field">
                            <i class="fa-solid fa-key"></i>
                            <input type="password" id="password" name="senha">
                        </div>
                    </label>
                    
                    <!-- FORGOT PASSWORD -->
                    <div id="forgot_password">
                        <a href="#">
                            Esqueceu a senha?
                        </a>
                    </div>
                </div>
            </div>

            <!-- LOGIN BUTTON -->
            <div>
            <input type="submit" id="login_button"
            Login>
            <a href="cadastro.php" id="login_button"> 
                Cadastrar
            </a>
            
        </div>
            

        </form>
    </main>

    <!-- JAVASCRIPT -->
    <script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>