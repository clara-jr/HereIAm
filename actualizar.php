<?php
    require_once 'conex.php';

    //Iniciar Sesión
    session_start();

    //Validar si se está ingresando con sesión correctamente
    if (!$_SESSION){
        echo '<script language = javascript>
        alert("Usuario no autenticado")
        self.location = "index.php"
        </script>';
    }

    $ID = $_SESSION['ID'];

    function fn_MostrarFoto($identificador) {
        if (is_file("images/usuarios/".$identificador.".jpg")) {
            ?>
        <img src="images/usuarios/<?php echo $identificador; ?>.jpg" width="70" />
            <?php
        }
    else {
            ?>
        <img src="images/usuarios/icona_user.png" width="70" />
            <?php
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HEREIAM</title>
    <link rel="shortcut icon" href="images/HIA-Gris.png" type="image/x-icon">
    <link rel="icon" href="images/HIA-Gris.png" type="image/x-icon">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles -->
    <style>
        body {
            padding-top: 0px;
            color: white;
        }

        #logo {width:80px; height: auto;}
        @media (max-width: 767px) {
            #logo { content: url("images/logo-gris.png");}
        }

        .navbar-brand {margin-bottom: 10px;}
        .glyphicon {
            padding-right: 5px;
        }
        @media only screen and (min-width:768px){
            .navbar-custom .navbar-brand{color:white;padding:20px}
            .navbar-custom .nav li a{color:white;padding:20px}
            .navbar-custom .nav li a:hover,.navbar-custom .nav li a:focus{color:#6b798f}
        }

        .jumbotron {
            padding-top: 160px;
            padding-bottom: 420px;
            color: white;
            text-align: center;
            background: url('images/FondoMapaMundi.jpg') no-repeat center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .btn-primary {
            background-color: #6b798f;
            border: solid 1px white;
        }
        .btn-primary:hover, .btn-primary:focus {
            background-color: white;
            color: #6b798f;
            border: solid 1px #6b798f;
        }

        footer {padding-top: 50px;}
    </style>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <script>
        function subirimagen() {
            self.name = 'opener';
            remote = open('gestionimagen.php', 'remote', 'width=400,height=150,location=no,scrollbars=yes,menubars=no,toolbars=no,resizable=yes,fullscreen=no,status=yes');
            remote.focus();
        }
    </script>

    <!-- Navigation -->
    <?php require_once 'headerwhite.html';?>

    <!-- .jumbotron -->
    <div class="jumbotron">

        <!-- HEADING, FEATURES AND EDITING SECTION CONTAINER -->
        <div class="container">

            <div class="vertical-registration-form">
                <div class="colored-line">
                </div>
                <h3>Actualiza tus datos</h3>
                <form class="registration-form" method="post" name="form1" action="actualizar_action.php">
                    <br>
                    <span>Foto de perfil:</span>
                    <?php echo fn_MostrarFoto($_SESSION['ID']); ?>
                    <input type="button" name="button" id="button" class="color-black" value="Subir Imagen" onclick="javascript:subirimagen();"/>
                    <br>
                    <input class="form-control input-box" id="user" type="text" name="user" placeholder="Nuevo usuario">
                    <input class="form-control input-box" id="password" type="password" name="password" placeholder="Nueva contraseña">
                    <input class="form-control input-box" id="password2" type="password" name="password2" placeholder="Repetir contraseña">
                    <button class="btn btn-lg btn-primary" type="submit" value="Actualizar">Actualizar</button>
                    <input type="hidden" name="MM_insert" value="form1">
                </form>
            </div>

        </div>
        <!-- /END HEADING, FEATURES AND REGISTRATION FORM CONTAINER -->

    </div>
    <!-- /.jumbotron -->

    <!-- Footer -->
    <?php require_once 'footer.html';?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/navbar.min.js"></script>

</body>
</html>
