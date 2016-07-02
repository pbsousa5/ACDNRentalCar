<?php

include($_SERVER['DOCUMENT_ROOT'].'/ACDNRentalCar/config/path.php'); // Para facilitar Includes 

include($root . '/models/Carros.php');

$car = new Carros();

if($_SERVER['REQUEST_METHOD']=="POST"){
	if($_POST['type'] == 'get'){
		$car->getCarros();
	}
	if($_POST['type'] == 'getCarro'){
		$car_id = $_POST['car_id'];
		$car->getCarroPorId($car_id);
	}
	if($_POST['type'] == 'post'){
		$formData = $_POST;
		$car->insertCarro($formData);
	}
	if($_POST['type'] == 'delete'){
		$car_id = $_POST['car_id'];
		$car->deleteCarro($car_id);
	}
	if($_POST['type'] == 'put'){
		$formData = $_POST;
		$car_id = $_POST['car_id'];
		$car->updateCarro($formData,$car_id);
	}
}


