<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="imgs/favicon.png">
	<title>Painel Administrativo - ACDN</title>
<?php include('section_css.php') ?>
    <link href="css/dashboard.css" rel="stylesheet">
 	<link href="css/admin-theme/metisMenu.min.css" rel="stylesheet">
    <link href="css/admin-theme/timeline.css" rel="stylesheet">
    <link href="css/admin-theme/sb-admin-2.css" rel="stylesheet">
</head>
<body>

<?php

	include('../config/config.php');
	include('../config/session.php');
	$user=$usuario->userDetails($session_uid);

?>

<section id="painel">
  <div id="wrapper">
  		<?php include('adm/menu.php') ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Painel de Controle</h1>
                </div>
                <!-- /.col-lg-12 -->
                <div id="content" class="col-md-5">

                </div>
                <div id="grid" class="col-md-7">
                    
                </div>
            </div>
        <!-- /#page-wrapper -->

    </div>
</section>



<?php include('section_js.php') ?>
<script src="js/admin-theme/metisMenu.min.js"></script>
<script src="js/admin-theme/raphael-min.js"></script>
<script src="js/admin-theme/sb-admin-2.js"></script>
<script src="js/admin-theme/jquery.dataTables.min.js"></script>
<script src="js/admin-theme/dataTables.bootstrap.min.js"></script>

</body>
</html>

<script type="text/javascript">
	$('#painelLoc').click(function(){
        $('.page-header').text('Painel de Controle - Locadora');
        $('#content').load('views/adm/cadloc.php');
        $('#grid').load('views/adm/gerloc.php');
	})
</script>

