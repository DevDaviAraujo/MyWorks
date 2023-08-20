
<?php

/* conexão com o banco de dados */
require("conn2.php");
require("usuario.php");

/* Recebendo os valores pelo vetor */
$formData = filter_input_array(INPUT_POST,FILTER_DEFAULT);

    /* if cuja condição verifica o input do botão de cadastro pelo usuário */ 
if(!empty($formData['addUsuario'])) {
    $createUsuario = new usuario();
    $createUsuario->formData = $formData;
    $result = $createUsuario->create();

    if($result){
        $_SESSION['msgSucesso'] = "Sucesso ao cadastrar!";
    }
    else{
        $_SESSION['msgFail']="Falha ao cadastrar!";
    }

    if(isset($_SESSION['msgSucesso'])){
        echo $_SESSION['msgSucesso'];
        unset($_SESSION['msgSucesso']);
    }
    if(isset($_SESSION['msgFail'])){
        echo $_SESSION['msgFail'];
        unset ($_SESSION['msgFail']);
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
                <h1>Cadastrar</h1>
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
                          
                        </a>
                        <br>
                    </div>
                </div>
            </div>

            <!-- LOGIN BUTTON -->
            <div>
            <button type="submit" id="login_button" value="Cadastrar" name="addUsuario">Cadastrar</button>
            <a href="Login.php"> <button type="button" id="login_button">Login</button></a>
            
        </div>
            

        </form>
    </main>

    <!-- JAVASCRIPT -->
    <script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>