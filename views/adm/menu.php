<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top topDashboard" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Olá,  <?php echo $user->name; ?></a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li><a href="logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li id="homeDash">
                    <a class="option" href="#"><i class="fa fa-dashboard fa-fw"></i> Painel de Controle</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-home fa-fw"></i> Locadoras<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li id="painelLoc">
                            <a class="option">Gerenciar</a>
                        </li>
                        <li id="viewLoc">
                            <a class="option" href="#">Visão Geral</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-car fa-fw"></i> Veiculos<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li id="painelCar">
                            <a class="option" href="#">Gerenciar</a>
                        </li>
                        <li id="viewCar">
                            <a class="option" href="#">Visão Geral</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-user fa-fw"></i> Clientes<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li id="viewCli">
                            <a class="option" href="#">Visão Geral</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>                                                
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>