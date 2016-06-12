<?php
	include('config.php');
	$session_uid='';
	$_SESSION['uid']=''; 
	if(empty($session_uid) && empty($_SESSION['uid'])){
		header("Location: home");
	}

