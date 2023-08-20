<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="login-cadastro.css">
    
    <title>Cadastrar</title>
</head>
<body>   
<?php
    require_once("usuario.php");

    error_reporting(0);

    $formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    
    if(!empty($formData["addusuario"])){
        $createusuario = new usuario();
        $createusuario->formData = $formData;

        if(count($createusuario->verificar())>0){
          
            echo '<script>alert("usuario ja cadastrado")</script>';

        }
        else{
            echo '<script>alert("usuario cadastrado com sucesso")</script>';
            $result = $createusuario->create();
    
            if(isset($_SESSION['msgSucesso'])){
                echo $_SESSION['msgSucesso'];
                unset($_SESSION['msgSucesso']);
            }
            if(isset($_SESSION['msgFail'])){
                echo $_SESSION['msgFail'];
                unset ($_SESSION['msgFail']);

                
            }
        }
    }
    ?>
    
    <main id="container">   
    <form id="login_form"  method="POST" action="">
            <!-- FORM HEADER -->
            <div id="form_header">
                <h1>Cadastrar</h1>
                
            </div>
                <!-- EMAIL -->
                <div class="input-box">
                    <label for="email">
                        E-mail
                        <div class="input-field">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="email" name="email" placeholder="E-mail" required><br>
                        </div>
                    </label>
                </div>
                
                <!-- PASSWORD -->
                <div class="input-box">
                    <label for="password">
                        Senha
                        <div class="input-field">
                            <i class="fa-solid fa-key"></i>
                            <input type="password" name="senha" placeholder="Senha" required>
                            
                        </div>
                    </label>
                    <br>
                    <a href="login.php">já possui uma conta?</a>
                    

            <!-- Cadastro Botão -->
            <center>
            <div>
           
                <br><br>
                <input type="submit" id="login_button" value="Cadastrar" name="addusuario">
            </div>
            </center>
            

        </form>
    </main>
</body>
</html>