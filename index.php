<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="imgs/favicon.png">

    <title>ACDN - Rental Cars</title>

    <?php include('views/section_css.php') ?>
</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">
                    <span id="logo">
                        <span id="logoImg">&nbsp;</span>
                            <span class="">ACDN Rental Cars</span>
                    </span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
					<li class="page-scroll">
                        <a href="#main">Reservar</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Galeria</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">Tarifas</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Sobre</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div id="main" class="row">
            <div  class="row">
                <div class="container containerReservar">
                    <div id="formReservas" class=" col-md-4 col-sm-8 col-xs-8">
                        <div class="formTopo">
                            <div class="formTitulo">
                                <h4>Reserve conosco agora mesmo!</h4>
                                <p></p>
                            </div>
                        </div>
                        <form role="form" action="" method="post">
                            <div class="form-group">
                                <label for="pontoRetirada">Ponto de Retirada</label>
                                <input type="text" name="pontoRetirada" placeholder="Pontos de Locação" class="pontoRetirada form-control" id="pontoRetirada">
                            </div>
                            <div class="form-group left-align">
                                <input type="checkbox" name="checkDevolucao"  class="pull-left" id="checkDevolucao"><span class="labelCheck">Devolver em outro ponto</span>
                            </div>                                
                            <div class="form-group">
                                <label  for="data de retirada">Data da Retirada</label>
                                <input type="date" name="dataRetirada" class="dataRetirada form-control" id="dataRetirada">
                            </div>
                            <div class="form-group">
                                <label for="data de devolucao">Data da Devolução</label>
                                <input type="date" name="dataDevolução" class="dataDevolucao form-control" id="dataDevolução">
                            </div>
                            <button type="submit" class="btn btn-lg btn-warning btnReservar"><strong>Alugar</strong></button>
                        </form>
                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <div class="intro-text">
                            <h2 class="tituloMain">Planeje sua próxima experiência<h2>
                            <h2><small class="subtitle">Qualidade + Sem Taxas de Cancelamento = Satisfação do Cliente</small></h2>
                        </div>
                    </div>
                </div>                
            </div>
            
        </div>
    </header>

    <?php include('views/galeria.php') ?>
    <?php include('views/tarifas.php') ?>
    <?php include('views/contato.php') ?>
    <?php include('views/footer.php') ?>

    <!-- Botao que leva ao topo da pagina, visivel apenas para telas pequenas -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div> 

    <?php include('views/section_js.php') ?>
    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>

</body>

</html>

