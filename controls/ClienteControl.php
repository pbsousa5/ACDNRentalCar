<?php

include($_SERVER['DOCUMENT_ROOT'].'/ACDNRentalCar/config/path.php'); // Para facilitar Includes 

include($root . '/models/Clientes.php');

$cli = new Clientes();

if($_SERVER['REQUEST_METHOD']=="POST"){
	if($_POST['type'] == 'post'){
		$formData = $_POST;
		$cli->insertCliente($formData);
	}
}


