<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login-cadastro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

    
    <title>Login</title>
</head>
<body>   
    <?php

    require_once('usuario.php');

    error_reporting(0);

    $formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if(!empty($formData["logar"])){
        $createusuario = new usuario();
        $createusuario->formData = $formData;
        $result_cliente = $createusuario->list();
        foreach ($result_cliente as $row_cliente){
            extract($row_cliente);
        }
        if(count($createusuario->validar())>0){
            if(count($createusuario->admin())>0){
                header('location:../PaginaAdm/home_page.php?id='.$id.'');  
            }
            
            else{
                header('location:../PaginaCliente/home_page.php?id='.$id.'');

            }
        }    
     }
    ?>
    
    <main id="container">   
    <form id="login_form"  method="POST" action="">
            <!-- FORM HEADER -->
            <div id="form_header">
                <h1>Login</h1>
                
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
                    

            <!-- Cadastro Botão -->
            <center>
            <div>
                <br><br>
                <input type="submit" id="login_button" value="Logar" name="logar"></input>
                <a href="cadastro.php"><input type="button" id="login_button" value="Cadastrar"></input></a>
            </div>
            </center>
            

        </form>
    </main>
</body>
</html>