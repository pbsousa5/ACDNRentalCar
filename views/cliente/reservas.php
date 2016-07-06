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
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/reservas.css">
</head>
<body cz-shortcut-listen="true">

    <!-- Fixed navbar -->
    <nav class="nopad navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">ACDN - <span class="red">Reservas</span></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
<!--           <ul class="nav navbar-nav">
            <li class=""><a href="#">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul> -->
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="logoutCli"><i class="fa fa-sign-out fa-fw"></i> Sair</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="vitrineCarros container">
			<div class="col-md-10 col-md-offset-1">
			<div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="false" id="myCarousel">
			  <div class="carousel-inner">
			  <img id="check" class="animated pulse" src="imgs/check.png">
			  </div>
			  <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
			  <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
			</div>
		</div>
    </div> <!-- /container -->
    <div class="col-sm-12">
		<section id="contact">
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-12 col-sm-offset-2">
		                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
		                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
		                   
		                        <div class="col-sm-6 control-group">
		                            <div class="form-group col-xs-12 floating-label-form-group controls">
		                                <label>Placa</label>
		                                <input type="text" class="form-control" placeholder="Placa" id="name" required="" data-validation-required-message="Please enter your name.">
		                                <p class="help-block text-danger"></p>
		                            </div>
		                        </div>
		                        <div class="col-sm-6 control-group">
		                            <div class="form-group col-xs-12 floating-label-form-group controls">
		                                <label>Cor</label>
		                                <input type="email" class="form-control" placeholder="Cor" id="email" required="" data-validation-required-message="Please enter your email address.">
		                                <p class="help-block text-danger"></p>
		                            </div>
		                        </div>
			                </div>
			                <div class="col-sm-12 col-sm-offset-2">
		                        <div class="col-sm-4 control-group">
		                            <div class="form-group col-xs-12 floating-label-form-group controls">
		                                <label>Modelo</label>
		                                <input type="tel" class="form-control" placeholder="Modelo" id="phone" required="" data-validation-required-message="Please enter your phone number.">
		                                <p class="help-block text-danger"></p>
		                            </div>
		                        </div>
		                        <div class="col-sm-4 control-group">
		                            <div class="form-group col-xs-12 floating-label-form-group controls">
		                                <label>Marca</label>
		                                <input type="tel" class="form-control" placeholder="Marca" id="phone" required="" data-validation-required-message="Please enter your phone number.">
		                                <p class="help-block text-danger"></p>
		                            </div>
		                        </div>
		                        <div class="col-sm-4 control-group">
		                            <div class="form-group col-xs-12 floating-label-form-group controls">
		                                <label>Ano</label>
		                                <input type="tel" class="form-control" placeholder="Ano" id="phone" required="" data-validation-required-message="Please enter your phone number.">
		                                <p class="help-block text-danger"></p>
		                            </div>
		                        </div>

		                        <br>
	                        </div>
	                        <div class="col-sm-12">
		                        <div class="col-sm-6 control-group">
		                            <div class="form-group col-xs-6 floating-label-form-group controls">
		                                <label>Datas</label>
		                                <input type="date" class="form-control" placeholder="Ano" id="phone" required="" data-validation-required-message="Please enter your phone number.">
		                                <p class="help-block text-danger"></p>
		                            </div>
		                        </div>	                        
	                            <div class="form-group col-sm-6">
	                                <button type="submit" class=" pull-right btn btn-success btn-lg">Alugar</button>
	                            </div>
	                        </div>
		            </div>
		        </div>
		    </section>
    </div>

<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript">

	$('#check').hide();

	$(window).on('resize', function(){
      var win = $(this); //this = window
      if (win.width() <= 600) {
      	$('.fotoCarro').attr('style','width:50%');
      	$('.fotoCarro').css('margin-left','100px');
       }
      else{
      	$('.fotoCarro').attr('style','margin-left:200px');
      }
	});
		

	$('.carousel[data-type="multi"] .item').each(function(){
	  var next = $(this).next();
	  if (!next.length) {
	    next = $(this).siblings(':first');
	  }
	  next.children(':first-child').clone().appendTo($(this));

	  for (var i=0;i<4;i++) {
	    next=next.next();
	    if (!next.length) {
	    	next = $(this).siblings(':first');
	  	}
	    
	    next.children(':first-child').clone().appendTo($(this));
	  }
	});

	data = [];
	data.push({name:'type',value:'getCarro'});

	$.ajax({
		url: "controls/CarroControl.php",
		type: "post",
		data: data,
		dateType: "json",
		success: function (response) {  
			response = JSON.parse(response);
			carros = response;
			carrosCFoto = [];

			for(var i = 0;i < carros.length; i++){
				if(carros[i].foto != null){
					carrosCFoto.push(carros[i]);				
				}
			}


		    for(var i = 0;i < carrosCFoto.length; i++){
		    	active = '';
		    	if(i == 0){
		    		active = 'active';
		    	}

		    	carro =  '<div class="item '+active+'">'+
					      '<div class="col-md-2 col-sm-6 col-xs-12"><a class="btnCarro" data-id="'+carrosCFoto[i].car_id+'" data-placa="'+carrosCFoto[i].placa+'" data-cor="'+carrosCFoto[i].modelo+'" data-modelo="'+carrosCFoto[i].modelo+'" data-ano="'+carrosCFoto[i].ano+'" data-marca="'+carrosCFoto[i].marca+'"" href="#"><img class="fotoCarro" src="imgs/'+carrosCFoto[i].foto+'" class=""></a></div>'+
					    '</div>';

		    	$('.carousel-inner').append(carro);
			}

				$('.btnCarro').on('click',function(){
					alert($(this).data("modelo"));
					$('#check').show();
				});

				$('.carousel-control.left').click(function() {
				 	$('#check').hide();
				});

				$('.carousel-control.right').click(function() {
				  	$('#check').hide();
				});

		},
		error: function(jqXHR, textStatus, errorThrown) {
		 alert(textStatus, errorThrown);
		}
	 });
</script>
  
</body>

<div id="window-resizer-tooltip" style="display: none;"><a href="#" title="Edit settings"></a><span class="tooltipTitle">Window size: </span><span class="tooltipWidth" id="winWidth">1311</span> x <span class="tooltipHeight" id="winHeight">744</span><br><span class="tooltipTitle">Viewport size: </span><span class="tooltipWidth" id="vpWidth">1311</span> x <span class="tooltipHeight" id="vpHeight">370</span></div></body>
</html>
