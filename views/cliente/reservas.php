<?php

include($_SERVER['DOCUMENT_ROOT'].'/ACDNRentalCar/config/path.php'); // Para facilitar Includes 

include($root . '/controls/ClienteControl.php');



if(empty($_SESSION['cli_id'])){
	header("Location: 404");
}

?>

<?php include($root .'/views/section_css.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Reservas</title>
</head>
<body>

<h3>Oi Eu sou o mizeravao</h3>
<a href="logoutCli"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
</body>
</html>