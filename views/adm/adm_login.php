<?php
    include($_SERVER['DOCUMENT_ROOT'].'/ACDNRentalCar/config/path.php'); // Para facilitar Includes 

    include($root . '/config/config.php');
    include($root . '/controls/UsuarioControl.php');

?>



<!DOCTYPE html>
<html>
<head>
    <title>ACDN - Acesso Administrativo</title>
    <?php include($root . '/views/section_css.php') ?>
    <link href="css/admin-theme/metisMenu.min.css" rel="stylesheet">
    <link href="css/admin-theme/sb-admin-2.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title text-center"><span id="logoImg">&nbsp;</span> ACDN - Acesso Administrativo</h3>
                </div>
                <div class="panel-body">
                    <form method="post" action="" name="login">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Usuario ou E-mail" name="usernameEmail" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Senha" name="password" type="password">
                            </div>
                            <div class="errorMsg" style="color: red; margin-bottom: 10px;S"><?php echo $errorMsgLogin; ?></div>
                            <!-- Change this to a button or input when using this as a form -->
                            <input type="submit" class="btn btn-lg btn-success btn-block button" name="loginSubmit" value="Login">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>

<?php include($root . '/views/section_js.php') ?>
<script src="js/admin-theme/metisMenu.min.js"></script>
<script src="js/admin-theme/sb-admin-2.js"></script>