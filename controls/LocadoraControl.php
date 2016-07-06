<?php

include($_SERVER['DOCUMENT_ROOT'].'/ACDNRentalCar/config/path.php'); // Para facilitar Includes 

include($root . '/models/Locadoras.php');

$loc = new Locadoras();

if($_SERVER['REQUEST_METHOD']=="POST"){
	if($_POST['type'] == 'get'){
		$loc->getLocadoras();
	}
	if($_POST['type'] == 'getLocadora'){
		$loc_id = $_POST['loc_id'];
		$loc->getLocadoraPorId($loc_id	);
	}
	if($_POST['type'] == 'post'){
		$formData = $_POST;
		$loc->insertLocadora($formData);
	}
	if($_POST['type'] == 'delete'){
		$loc_id = $_POST['loc_id'];
		$loc->deleteLocadora($loc_id);
	}
	if($_POST['type'] == 'put'){
		$formData = $_POST;
		$loc_id = $_POST['loc_id'];
		$loc->updateLocadora($formData,$loc_id);
	}
}

if($_SERVER['REQUEST_METHOD']=="GET"){
	$loc->countLocadoras();
}



