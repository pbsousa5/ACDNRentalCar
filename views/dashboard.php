<<!DOCTYPE html>
<html>
<head>
	<title>Painel Administrativo - ACDN</title>
<?php include('section_css.php') ?>
</head>
<body>

<?php

	include('../config/config.php');
	include('../config/session.php');
	$userDetails=$usuario->userDetails($session_uid);

?>

<h1>Welcome <?php echo $userDetails->name; ?></h1>
<a href="../config/logout.php"><button>Sair</button></a>



<?php include('section_js.php') ?>

</body>
</html>

