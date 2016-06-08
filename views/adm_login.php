<?php
    include("../config/config.php");
    include('../controls/Usuario.php');
    if($_SESSION['uid']){ //Valida se o usuario esta logado e tenta acessar a pagina de login.
        header("Location: dashboard.php"); // Page redirecting to home.php 
    }
    $usuario = new Usuario();

    $errorMsgReg='';
    $errorMsgLogin='';
    /* Login Form */
    if (!empty($_POST['loginSubmit'])){
        $usernameEmail=$_POST['usernameEmail'];
        $password=$_POST['password'];
    if(strlen(trim($usernameEmail))>1 && strlen(trim($password))>1 ) {
        $uid=$usuario->userLogin($usernameEmail,$password);
            if($uid){
                header("Location: dashboard.php"); // Page redirecting to home.php 
            }else {
                $errorMsgLogin="Usuario ou Senha Incorretos.";
            }
        }
    }

    /*CADASTRAR SENHA COM BASE EM ENCRIPTACAO HASH256 como por exemplo: http://www.xorbin.com/tools/sha256-hash-calculator*/

?>



<!DOCTYPE html>
<html>
<head>
    <title></title>
<style type="text/css">
    #login{
    width: 20%; border: 1px solid #d6d7da; 
    padding: 0px 15px 15px 15px; 
    border-radius: 5px;font-family: arial; 
    line-height: 16px;color: #333333; font-size: 14px; 
    background: #ffffff;rgba(200,200,200,0.7) 0 4px 10px -1px;
    margin: 0 auto;
    }
    h3{color:#365D98}
    form label{font-weight: bold;}
    form label, form input{display: block;margin-bottom: 5px;width: 90%}
    form input{ 
    border: solid 1px #666666;padding: 10px;
    border: solid 1px #BDC7D8; margin-bottom: 20px
    }
    .button {
    background-color: #0027FF ;
    border-color: navy;
    font-weight: bold;
    padding: 12px 15px;
    max-width: 100px;
    color: #ffffff;
    margin: 0 auto;
    }
    .errorMsg{color: #cc0000;margin-bottom: 10px}
</style>
</head>
<body>

<div id="login">
    <h3>Login</h3>
    <form method="post" action="" name="login">
        <label>Usuario ou Email</label>
        <input type="text" name="usernameEmail" autocomplete="off" />
        <label>Senha</label>
        <input type="password" name="password" autocomplete="off"/>
        <div class="errorMsg"><?php echo $errorMsgLogin; ?></div>
        <input type="submit" class="button" name="loginSubmit" value="Login">
    </form>
</div>

</body>
</html>