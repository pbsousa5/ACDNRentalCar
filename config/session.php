<?php
if(!empty($_SESSION['uid'])){
	$session_uid=$_SESSION['uid'];
	include($root . '/controls/Usuario.php');
	$usuario = new Usuario();
}

if(empty($session_uid)){
	header("Location: 404");
}
?>