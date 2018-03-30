<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio Sesion</title>
    <base href="/ProyectoPastoral/">
    <meta name="description" content="Sistema de Gestion de visitas">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="public/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="public/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="public/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="public/css/style.css" rel="stylesheet">
</head>
<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">Ad<b>min</b></a>
            <small>Sistema de gestion de visitas</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST">
                    <div class="msg">Inicie sesión para comenzar</div>
                    <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">person</i>
                            </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Correo electronico" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">lock</i>
                            </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
                        </div>
                    </div>
                    <div class="row">
                        <?php if(isset($this->errorMsg)){?>
                            <div class="col-xs-12">
                                <span class="label label-danger"><?php print $this->errorMsg?></span>
                            </div>
                        <?php }?>
                        <div class="col-xs-12">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">Ingresar</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-12 align-right">
                            <a href="#">Olvidaste tu contraseña?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="public/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="public/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Bootstrap Notify Plugin Js -->
    <script src="public/plugins/bootstrap-notify/bootstrap-notify.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="public/plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="public/plugins/jquery-validation/jquery.validate.js"></script>
    <script src="public/plugins/jquery-validation/localization/messages_es_PE.js"></script>
    <!-- Custom Js -->
    <script src="public/js/admin.js"></script>
    <script src="public/js/pages/login.js"></script>
</body>
</html>