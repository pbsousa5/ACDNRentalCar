<?php

include($_SERVER['DOCUMENT_ROOT'].'/ACDNRentalCar/config/path.php'); // Para facilitar Includes 

include($root . '/models/Locacao.php');

$loc = new Locacao();

if($_SERVER['REQUEST_METHOD']=="POST"){

	if($_POST['type'] == 'insertLocacao'){
		$data = $_POST;
		$loc->insertLocacao($data);
	}
	
	if($_POST['type'] == 'getLocCliente'){
		$clienteData = $_POST;
		$loc->getLocacaoPorId($clienteData);
	}
}



