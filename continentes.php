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
    <link href="css/animated.css" rel="stylesheet">

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

        h2, p {color: #404040;}

        #logo {width:80px; height: auto;}
        @media (max-width: 767px) {
            #logo { content: url("images/logo-gris.png");}
        }

        .navbar-brand {margin-bottom: 10px;}
        .glyphicon {
            padding-right: 5px;
        }

        .jumbotron {
            background-color: #ffffff;
            padding-top: 50px;
            padding-bottom: 100px;
            color: white;
            text-align: center;
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

    <!-- .jumbotron -->
    <div class="jumbotron">

        <!-- Page Content -->
        <div class="container">

            <hr class="featurette-divider">

            <!-- First Featurette -->
            <div class="featurette wow fadeInLeft animated" id="africa">
                <a href="subirAfrica.php"><img class="continente featurette-image img-circle img-responsive pull-right" src="images/africacuadrada.jpg"></a>
                <h2 class="featurette-heading">ÁFRICA
                    <span class="text-muted"></span>
                </h2>
                <p class="lead">Seguro que durante tu viaje en África has podido ver leones, tigres y panteras, ¡dios mío! ¿Pudiste subir a la roca del clan y cantar el «achuweña»? Haz clic en la imagen y comienza a escribir sobre todo lo que hiciste en tu viaje africano.</p>
            </div>

            <hr class="featurette-divider">

            <!-- Second Featurette -->
            <div class="featurette wow fadeInRight animated" id="america">
                <a href="subirAmerica.php"><img class="continente featurette-image img-circle img-responsive pull-left" src="images/americacuadrada.jpg"></a>
                <h2 class="featurette-heading">AMÉRICA
                    <span class="text-muted"></span>
                </h2>
                <p class="lead">¿Has desayunado en Tiffany's? ¿Mediste la altura del Cristo de Corcovado? Adelante, ¡comparte tus experiencias sobre América con todos los demás! Pincha sobre la imagen y cuéntanos tu historia.</p>
            </div>

            <hr class="featurette-divider">

            <!-- Third Featurette -->
            <div class="featurette wow fadeInLeft animated" id="asia">
                <a href="subirAsia.php"><img class="continente featurette-image img-circle img-responsive pull-right" src="images/asiacuadrada.jpg"></a>
                <h2 class="featurette-heading">ASIA
                    <span class="text-muted"></span>
                </h2>
                <p class="lead">¿Te bañaste en Palawan y confirmaste que era la playa más bonita del mundo? Entre Charmander, Bulbasur y Squirtel, ¿a quién elegiste? Pincha sobre la imagen y cuéntanos cómo de ricos estaban los tallarines y el rollito que tomaste en tu viaje por Asia.</p>
            </div>

            <hr class="featurette-divider">

            <!-- Forth Featurette -->
            <div class="featurette wow fadeInRight animated" id="europa">
                <a href="subirEuropa.php"><img class="continente featurette-image img-circle img-responsive pull-left" src="images/europacuadrada.jpg"></a>
                <h2 class="featurette-heading">EUROPA
                    <span class="text-muted"></span>
                </h2>
                <p class="lead">¿Has usado la excusa de que París es la ciudad del amor para pedirle matrimonio? ¿Probaste los pasteles de Belem durante tu visita a Portugal? Si ya te has quitado el frío de encima después de pasar por Rusia, pincha sobre la imagen y cuéntanos todo lo que hiciste durante tu viaje por Europa.</p>
            </div>

            <hr class="featurette-divider">

            <!-- Fifth Featurette -->
            <div class="featurette wow fadeInLeft animated" id="oceania">
                <a href="subirOceania.php"><img class="continente featurette-image img-circle img-responsive pull-right" src="images/oceaniacuadrada.jpg"></a>
                <h2 class="featurette-heading">OCEANÍA
                    <span class="text-muted"></span>
                </h2>
                <p class="lead">Si haces clic sobre la imagen, podrás contarnos cuántos canguros viste durante tu viaje a Oceanía. ¿Conseguiste ver algún koala? ¿Te dejaron tocar un didgeridoo? ¡Lanza el boomerang y comienza a escribir!</p>
            </div>

            <hr class="featurette-divider">

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

    <!-- jquery easing -->
    <script src="js/wow.min.js"></script>
    <script>
        var wow = new WOW ({
                    boxClass:     'wow',      // animated element css class (default is wow)
                    animateClass: 'animated', // animation css class (default is animated)
                    offset:       120,          // distance to the element when triggering the animation (default is 0)
                    mobile:       false,       // trigger animations on mobile devices (default is true)
                    live:         true        // act on asynchronously loaded content (default is true)
                }
        );
        wow.init();
    </script>

</body>
</html>

