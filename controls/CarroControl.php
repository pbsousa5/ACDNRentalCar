<?php

include($_SERVER['DOCUMENT_ROOT'].'/ACDNRentalCar/config/path.php'); // Para facilitar Includes 

include($root . '/models/Carros.php');

$car = new Carros();

if($_SERVER['REQUEST_METHOD']=="POST"){
	if($_POST['type'] == 'getCarro'){
		$car->getCarros();
	}
	if($_POST['type'] == 'getCarroPorId'){
		$car_id = $_POST['car_id'];
		$car->getCarroPorId($car_id);
	}
	if($_POST['type'] == 'postCarro'){
		$formData = $_POST;
		$car->insertCarro($formData);
	}
	if($_POST['type'] == 'deleteCarro'){
		$car_id = $_POST['car_id'];
		$car->deleteCarro($car_id);
	}
	if($_POST['type'] == 'putCarro'){
		$formData = $_POST;
		$car_id = $_POST['car_id'];
		$car->updateCarro($formData,$car_id);
	}
}

if($_SERVER['REQUEST_METHOD']=="GET"){
	$car->countCarros();
}


