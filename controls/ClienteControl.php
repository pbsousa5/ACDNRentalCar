<?php

include($_SERVER['DOCUMENT_ROOT'].'/ACDNRentalCar/config/path.php'); // Para facilitar Includes 

include($root . '/models/Clientes.php');

$cli = new Clientes();



if($_SERVER['REQUEST_METHOD']=="POST"){

	if($_POST['type'] == 'post'){
		$formData = $_POST;
		$cli->insertCliente($formData);
	}

	if($_POST['type'] == 'getCliente'){
		$cli->getCliente();
	}

	if($_POST['type'] == 'acessoCliente'){
		$formData = $_POST;

	    $errorMsgReg='';
	    $errorMsgLogin='';

	    if(!empty($_POST)){

        	$cli_id=$cli->loginCliente($formData);
            if($cli_id){
                header("Location: ../reservas"); // Page redirecting to home.php 
            }else {
                $errorMsgLogin="Usuario ou Senha Incorretos.";
                echo $errorMsgLogin;
            }
	    }
	}
}





