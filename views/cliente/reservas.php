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
	<meta charset="UTF-8">
	<title>Reservas</title>
	<link rel="stylesheet" type="text/css" href="css/pikaday.css">
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
		<h4 class="text-center"><b>Clique</b> na foto do veículo para escolher o modelo que deseja alugar</h4>
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
		<section id="infoVeiculo">
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-12 ">
		                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
		                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
		                   
		                        <div class="col-sm-6 control-group">
		                                <label>Placa</label>
		                            <div class="form-group col-xs-12 floating-label-form-group controls">
		                                <input type="text" class="form-control" placeholder="Placa" id="placa" required="" readonly data-validation-required-message="Please enter your name.">
		                                <p class="help-block text-danger"></p>
		                            </div>
		                        </div>
		                        <div class="col-sm-6 control-group">
		                                <label>Cor</label>
		                            <div class="form-group col-xs-12 floating-label-form-group controls">
		                                <input type="email" class="form-control" placeholder="Cor" id="cor" required="" readonly data-validation-required-message="Please enter your email address.">
		                                <p class="help-block text-danger"></p>
		                            </div>
		                        </div>
			                </div>
			                <div class="col-sm-12">
		                        <div class="col-sm-4 control-group">
		                                <label>Modelo</label>
		                            <div class="form-group col-xs-12 floating-label-form-group controls">
		                                <input type="tel" class="form-control" placeholder="Modelo" id="modelo" required="" readonly data-validation-required-message="Please enter your phone number.">
		                                <p class="help-block text-danger"></p>
		                            </div>
		                        </div>
		                        <div class="col-sm-4 control-group">
		                                <label>Marca</label>
		                            <div class="form-group col-xs-12 floating-label-form-group controls">
		                                <input type="tel" class="form-control" placeholder="Marca" id="marca" required="" readonly data-validation-required-message="Please enter your phone number.">
		                                <p class="help-block text-danger"></p>
		                            </div>
		                        </div>
		                        <div class="col-sm-4 control-group">
		                                <label>Ano</label>
		                            <div class="form-group col-xs-12 floating-label-form-group controls">
		                                <input type="tel" class="form-control" placeholder="Ano" id="ano" required="" readonly data-validation-required-message="Please enter your phone number.">
		                                <p class="help-block text-danger"></p>
		                            </div>
		                        </div>

		                        <br>
	                        </div>
	                        <div class="aluguel col-sm-12 col-sm-offset-2">
		                        <div class="col-sm-6 pull-right  col-sm-offset-2 control-group">
		                            <div class="form-group pull-right">
										<div class="input-daterange col-xs-8  input-group">
						                    <input type="text" class="input-sm form-control datepicker" placeholder="Data de Retirada" id="dataInicio" name="dataInicio">
						                    <span class="input-group-addon">até</span>
						                    <input type="text" class="input-sm form-control datepicker" placeholder="Data de Devolução" id="dataFim" name="dataFim">                    
						                </div>
		                            </div>
		                        </div>	                        
	                            <div class="form-group pull-right col-sm-6">
	                                <button type="submit" disabled class="btnAlugar  btn btn-success btn-lg">Alugar</button>
	                            </div>
	                        </div>
		            </div>
		        </div>
		    </section>
    </div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Disponibilidade de Veiculos</h4>
      </div>
        <div class="aluguel col-sm-12">
            <div class="form-group pull-right">
				<div class="input-daterange col-xs-12  input-group">
                    <input type="text" class="input-sm form-control datepicker" placeholder="Data de Retirada" id="dataInicioDisp" name="dataInicio">
                    <span class="input-group-addon">até</span>
                    <input type="text" class="input-sm form-control datepicker" placeholder="Data de Devolução" id="dataFimDisp" name="dataFim">                    
                </div>
            </div>                       
            <div class="form-group pull-right col-sm-6">
                <button type="submit" disabled class="btnConsultar  btn btn-success btn-lg">Consultar</button>
            </div>
        </div>
      <div class="modal-footer">

      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/moment.js"></script>
<script src="js/pikaday.js"></script>

<script type="text/javascript">



	$('#myModal').modal();

	clienteData = [];
	cli_id = '<?php echo $_SESSION[cli_id] ?>';

	clienteData.push({name:'type',value:'getLocCliente'});
	clienteData.push({name:'cli_id',value:cli_id});

	$.ajax({
		url: "controls/LocacaoControl.php",
		type: "post",
		data: clienteData,
		dateType: "json",
		success: function (response) {  
			console.log(response);
		},
		error: function(jqXHR, textStatus, errorThrown) {
		 alert(textStatus, errorThrown);
		}
 	});

	$('#check').hide();

   var pickerDisp = new Pikaday({ 
        field: $('#dataInicioDisp')[0],
        format: 'DD/MM/YYYY',  
    });

   var picker2Disp = new Pikaday({ 
        field: $('#dataFimDisp')[0],
        format: 'DD/MM/YYYY',         
    });


   var picker = new Pikaday({ 
        field: $('#dataInicio')[0],
        format: 'DD/MM/YYYY', 
        minDate: moment().toDate(), 
    });

   var picker2 = new Pikaday({ 
        field: $('#dataFim')[0],
        format: 'DD/MM/YYYY', 
        minDate: moment().add(1,'days').toDate(), //Pelo menos um dia de diferença.
    });

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
					      '<div class="col-md-2 col-sm-6 col-xs-12"><a class="btnCarro" data-id="'+carrosCFoto[i].car_id+'" data-placa="'+carrosCFoto[i].placa+'" data-cor="'+carrosCFoto[i].cor+'" data-modelo="'+carrosCFoto[i].modelo+'" data-ano="'+carrosCFoto[i].ano+'" data-marca="'+carrosCFoto[i].marca+'"" href="#"><img class="fotoCarro" src="imgs/'+carrosCFoto[i].foto+'" class=""></a></div>'+
					    '</div>';

		    	$('.carousel-inner').append(carro);
			}

				$('.btnCarro').on('click',function(){
					$('#check').show();

					$('#placa').val($(this).data("placa"));
					$('#cor').val($(this).data("cor"));
					$('#modelo').val($(this).data("modelo"));
					$('#marca').val($(this).data("marca"));
					$('#ano').val($(this).data("ano"));

					 $('.btnAlugar').removeAttr("disabled");
					$('.btnAlugar').val($(this).data("id"));
				});

				$('.carousel-control.left').click(function() {
				 	$('#check').hide();

					$('#placa').val('');
					$('#cor').val('')
					$('#modelo').val('');
					$('#marca').val('');
					$('#ano').val('');
					$('.btnAlugar').attr("disabled",true);
				});

				$('.carousel-control.right').click(function() {
				  	$('#check').hide();

					$('#placa').val('');
					$('#cor').val('')
					$('#modelo').val('');
					$('#marca').val('');
					$('#ano').val('');
					$('.btnAlugar').attr("disabled",true);
				});

				$('.btnAlugar').on('click',function(){
					if($('#dataInicio').val() == '' || $('#dataFim').val() == ''){
						alert('Preencha as datas nas quais pretende retirar o veiculo');
					}else{
						data = [];
						car_id = $(this).val();
						loc_id = '1' //Fixo Provisorio, todos os carros saem da Filial.
						cli_id = '<?php echo $_SESSION[cli_id] ?>';

						console.log(car_id);
						console.log(cli_id);


						data.push({name:'dataInicio',value:$('#dataInicio').val()});
						data.push({name:'dataFim',value:$('#dataFim').val()});
						data.push({name:'loc_id',value:loc_id});
						data.push({name:'car_id',value:car_id});
						data.push({name:'cli_id',value:cli_id});

						$.ajax({
							url: "controls/LocacaoControl.php",
							type: "post",
							data: data,
							dateType: "json",
							success: function (response) {  
								alert(response);
							},
							error: function(jqXHR, textStatus, errorThrown) {
							 alert(textStatus, errorThrown);
							}
						 });
					}
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
