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

    $ID = $_POST['usuario'];
    $ciudad = $_POST['destino'];

    $consulta= "SELECT * FROM registros WHERE ID='".$ID."'";
    $fila=$db->query($consulta);
    $fila = $fila->fetch();
    $user = $fila['user'];

    $consulta2= "SELECT * FROM viajes WHERE ciudad='".$ciudad."' and ID='".$ID."'";
    $fila2=$db->query($consulta2);
    $fila2 = $fila2->fetch();
    $texto = $fila2['texto'];

    function listar($ruta){
        $active = 1;
        if (is_dir($ruta)) {
            if ($dir = opendir($ruta)) {
                while (($file = readdir($dir)) !== false) {
                    if ($file != "." && $file != "..") {
                        if($active) { ?>
                            <div class="item active">
                                <img class="img-responsive img-full" src="<?php echo "$ruta$file" ?>" alt="">
                            </div>
                            <?php $active=0;
                        }
                        else { ?>
                            <div class="item">
                                <img class="img-responsive img-full" src="<?php echo "$ruta$file" ?>" alt="">
                            </div>
                        <?php }
                    }
                }
                closedir($dir);
            }
        }else { // Slides por defecto
            ?>
            <div class="item active">
                <img class="img-responsive img-full" src="images/Slide3.jpg" alt="">
            </div>
            <div class="item">
                <img class="img-responsive img-full" src="images/Slide2.jpg" alt="">
            </div>
            <div class="item">
                <img class="img-responsive img-full" src="images/Slide1.jpg" alt="">
            </div>
        <?php }
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
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles -->
    <style>

        body {
            padding-top: 0px;
        }

        h3, p {color: #404040;}
        .item {
            height: 300px;
        }
        .img-full {
            max-width:100%; max-height:100%; margin:auto; display:block;
        }
        #logo {width:80px; height: auto;}
        @media (max-width: 767px) {
            #logo { content: url("images/logo-gris.png");}
            .item {
                height: 150px;
            }
        }
        .navbar-brand {margin-bottom: 10px;}
        .glyphicon {
            padding-right: 5px;
        }

        .jumbotron {
            background-color: #ffffff;
            padding-top: 50px;
            padding-bottom: 100px;
            text-align: center;
        }
        .carousel-inner {
            align: center; vertical-align: middle;
        }

        .container {margin-top: 100px;}
        .jumbotron .container {margin-top: 0;}
        .jumbotron .container p {text-align:justify;}
        .icon-prev, .icon-next{color: black; }

        @media only screen and (max-width:480px){
            .row {padding-top: 30px;}
        }

        footer {padding-top: 20px;}

    </style>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <?php require_once 'headergrey.html';?>

    <!-- .container -->
    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <?php $d = 'images/ciudades/'.$ciudad.$ID.'/'; listar($d); ?>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <!-- .jumbotron -->
    <div class="jumbotron">

        <!-- .container -->
        <div class="container">
            <h3><?php echo $ciudad ?></h3>
            <p><?php echo $texto; ?></p>
            <br><br><br><br>
            <p><span id="firma" style="text-align:end; font-style:italic;">- <?php echo $user; ?></span></p>
        </div>
        <!-- /.container -->

    </div>
    <!-- /.jumbotron -->

    <!-- Footer -->
    <?php require_once 'footer-divider.html';?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/navbar.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        })
    </script>

</body>
</html>