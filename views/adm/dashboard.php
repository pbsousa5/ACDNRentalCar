<?php include($_SERVER['DOCUMENT_ROOT'].'/ACDNRentalCar/config/path.php') // Para facilitar Includes ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="imgs/favicon.png">
	<title>Painel Administrativo - ACDN</title>
<?php include($root .'/views/section_css.php') ?>
    <link href="css/dashboard.css" rel="stylesheet">
 	<link href="css/admin-theme/metisMenu.min.css" rel="stylesheet">
    <link href="css/admin-theme/timeline.css" rel="stylesheet">
    <link href="css/admin-theme/sb-admin-2.css" rel="stylesheet">
</head>
<body>

<?php

	include($root . '/config/config.php');
	include($root . '/config/session.php');
    
	$user=$usuario->userDetails($session_uid);

?>

<section id="painel">
  <div id="wrapper">
  		<?php include('menu.php') ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Painel de Controle - Home</h1>
                </div>
                <!-- /.col-lg-12 -->
           
                <div id="content" class="col-md-5">
                
                </div>
                <div id="grid" class="col-md-7">
                 
                </div>
                <div id="body" class="col-md-12">

                </div>
            </div>
        <!-- /#page-wrapper -->

    </div>
</section>



<?php include($root .'/views/section_js.php') ?>
<script src="js/admin-theme/metisMenu.min.js"></script>
<script src="js/admin-theme/raphael-min.js"></script>
<script src="js/admin-theme/sb-admin-2.js"></script>
<script src="js/admin-theme/jquery.dataTables.min.js"></script>
<script src="js/admin-theme/dataTables.bootstrap.min.js"></script>

</body>
</html>

<script type="text/javascript">

    $('.option').on('click',function(){
        $('.option').removeClass('active');
        $('a').removeClass('active');
        $(this).addClass("active");
    });

function countCarros(){
    $.ajax({
        url: "controls/CarroControl.php",
        type: "get",
        dateType: "json",
        success: function (response) {  
            response = JSON.parse(response);
            response = response[0];
            $('.numCarros').html(response.carros);

        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert(textStatus, errorThrown);
        }
     });    
}

function countLocadoras(){
    $.ajax({
        url: "controls/LocadoraControl.php",
        type: "get",
        dateType: "json",
        success: function (response) {  
            response = JSON.parse(response);
            response = response[0];
            $('.numLocadoras').html(response.locadoras);

        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert(textStatus, errorThrown);
        }
     });    
}

function countClientes(){
    $.ajax({
        url: "controls/ClienteControl.php",
        type: "get",
        dateType: "json",
        success: function (response) {  
            response = JSON.parse(response);
            response = response[0];
            $('.numClientes').html(response.clientes);

        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert(textStatus, errorThrown);
        }
     });    
}

    $('#homeDash').click(function(){
        $('.page-header').text('Painel de Controle - Home');
        $('#content').load('views/adm/count.html',function(){
            countCarros();
            countLocadoras();
            countClientes();          
                $('#viewLocs').on('click',function(){
                    $('#viewLoc').click();
                });

                $('#viewCars').on('click',function(){
                    $('#viewCar').click();
                });

                $('#viewClientes').on('click',function(){
                    $('#viewCli').click();
                });  
        });
        $('#grid').load('views/adm/progress.html');
        $('#body').html('');
    });

    $('#homeDash').click();


    $('#painelLoc').click(function(){
        $('.page-header').text('Painel de Controle - Locadora');
        $('#content').load('views/adm/locadora/cadloc.php');
        $('#grid').load('views/adm/locadora/gerloc.php');
        $('#body').html('');
    });

    $('#painelCar').click(function(){
        $('.page-header').text('Painel de Controle - Carros');
        $('#content').load('views/adm/carro/cadcar.php');
        $('#grid').load('views/adm/carro/gercar.php');
        $('#body').html('');
    });

    $('#viewCar').click(function(){
        $('.page-header').text('Visão Geral - Carros');
        $('#body').load('views/adm/carro/viewcar.php');
        $('#content').html('');
        $('#grid').html('');
    });

    $('#viewLoc').click(function(){
        $('.page-header').text('Visão Geral - Locadoras');
        $('#body').load('views/adm/locadora/viewloc.php');
        $('#content').html('');
        $('#grid').html('');
    });

    $('#viewCli').click(function(){
        $('.page-header').text('Visão Geral - Clientes');
        $('#body').load('views/adm/cliente/viewcli.php');
        $('#content').html('');
        $('#grid').html('');
    });


</script>

