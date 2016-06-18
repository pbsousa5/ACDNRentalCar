<?php
if(!empty($_SESSION['uid'])){
	$session_uid=$_SESSION['uid'];
	include($root . '/models/Usuarios.php');
	$usuario = new Usuarios();
}

if(empty($session_uid)){
	header("Location: 404");
}
?>