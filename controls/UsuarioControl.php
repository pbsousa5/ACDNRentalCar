<?php

include($_SERVER['DOCUMENT_ROOT'].'/ACDNRentalCar/config/path.php'); // Para facilitar Includes 

include($root . '/models/Usuarios.php');

 if($_SESSION['uid']){ //Valida se o usuario esta logado e tenta acessar a pagina de login.
        header("Location: dashboard"); // redirect p/ home.php 
    }

    $usuario = new Usuarios();

    $errorMsgReg='';
    $errorMsgLogin='';
    /* Login Form */
    if (!empty($_POST['loginSubmit'])){
        $usernameEmail=$_POST['usernameEmail'];
        $password=$_POST['password'];
    if(strlen(trim($usernameEmail))>1 && strlen(trim($password))>1 ) {
        $uid=$usuario->userLogin($usernameEmail,$password);
            if($uid){
                header("Location: dashboard"); // Page redirecting to home.php 
            }else {
                $errorMsgLogin="Usuario ou Senha Incorretos.";
            }
        }
    }

    /*CADASTRAR SENHA COM BASE EM ENCRIPTACAO HASH256 como por exemplo: http://www.xorbin.com/tools/sha256-hash-calculator*/