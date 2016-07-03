<?php
	include('config.php');
	$_SESSION['cli_id']=''; 
	if(empty($_SESSION['cli_id'])){
		header("Location: home");
	}

