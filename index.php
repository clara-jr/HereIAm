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
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

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
            overflow-x: hidden;
            color:white;
        }

        #logo {width:200px; height: auto;}

        .jumbotron {
            display: table;
            height: 100%;
            width: 100%;
            padding: 0;
            color: white;
            text-align: center;
            background: url('images/bg-01.jpg') no-repeat center scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .jumbotron .container {
            display: table-cell;
            vertical-align: middle;
            background-color: rgba(6,32,51,.8); /*rgba(0,0,0,.7);*/
            padding: 50px 0;
        }

        @media only screen and (max-width:767px){
            .btn-circle {display:none;}
            #formularios {
                padding-top: 80px;
                padding-bottom: 0px;
            }
            .fancy-header1 h2:after, .fancy-header1 h2:before {display: none;}
        }

        @media only screen and (max-width:480px){
            .jumbotron {
                height: 120%;
            }
        }

    </style>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- .jumbotron -->
    <div class="jumbotron">

        <div class="container">
            <img data-wow-duration="700ms" data-wow-delay="500ms" class="bounceInDown specialanimated" id="logo" src="images/logo-blancogrande.png">
            <p data-wow-duration="1000ms" class="intro-text slideInLeft specialanimated">HERE I AM te da la bienvenida.<br><br>Aquí podrás compartir cada una de tus experiencias como viajero/a con el resto de usuarios.<br />
                Sólo tienes que responder a una sencilla pregunta para empezar:<br><br></p>
            <h1 data-wow-duration="1000ms" class="brand-heading slideInRight specialanimated">¿DÓNDE HAS ESTADO?</h1>
            <a href="#formularios" class="btn btn-circle page-scroll">
                <i class="fa fa-angle-double-down animated"></i>
            </a>
        </div>

    </div>
    <!-- /.jumbotron -->

    <!-- Registration Section -->
    <section id="formularios" class="container">

        <div class="row">

            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <br>
                        <p>Si ya estás registrado puedes iniciar sesión</p>
                    </div>
                    <div class="panel-body">
                        <form method="POST" id="form1" name="form1" action="acceso_usuario.php">
                            <br>
                            <label class="sr-only">Usuario</label>
                            <input type="text" name="user" value="" maxlength="20" id="inputUser" class="form-control" placeholder="Usuario" required>
                            <br>
                            <label for="inputPassword" class="sr-only">Contraseña</label>
                            <input type="password" name="password" value="" maxlength="20" id="inputPassword" class="form-control" placeholder="Contraseña" required>
                            <p>&nbsp;</p>
                            <button class="btn btn-lg btn-primary" type="submit">Inicia Sesión</button>
                            <input type="hidden" name="MM_insert" value="form1">
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <br>
                        <p>¿No estás registrado? ¡Adelante! ¿A qué esperas?</p>
                    </div>
                    <div class="panel-body">
                        <form method="post" name="form1" action="registro_usuario.php">
                            <br>
                            <label class="sr-only">Usuario</label>
                            <input type="text" name="user" value="" maxlength="20" class="form-control" placeholder="Usuario" required>
                            <br>
                            <label for="inputPassword" class="sr-only">Contraseña</label>
                            <input type="password" name="password" value="" maxlength="20" class="form-control" placeholder="Contraseña" required>
                            <br>
                            <label for="inputPassword" class="sr-only">Contraseña</label>
                            <input type="password" name="password2" value="" maxlength="20" class="form-control" placeholder="Repetir contraseña" required>
                            <br>
                            <label for="inputEmail" class="sr-only">E-mail</label>
                            <input type="email" name="email" value="" maxlength="100" id="inputEmail" class="form-control" placeholder="E-mail" required>
                            <p>&nbsp;</p>
                            <button class="btn btn-lg btn-primary" type="submit" value="Registrarse">Regístrate</button>
                            <input type="hidden" name="MM_insert" value="form1">
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- / Registration Section -->

    <!-- Fun Facts Section -->
    <section id="facts" class="facts">

        <div class="parallax-overlay">

            <div class="container">

                <div class="row number-counters">

                    <div class="sec-title text-center mb50 wow fadeIn animated">
                        <h2>Información Interesante</h2>
                    </div>
                    <!-- first count item -->
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
                        <div class="counters-item">
                            <i class="fa fa-clock-o fa-3x"></i>
                            <strong data-to="3200">0</strong>
                            <!-- Set Your Number here. i,e. data-to="56" -->
                            <p>Horas de Trabajo</p>
                        </div>
                    </div>
                    <!-- second count item -->
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="counters-item">
                            <i class="fa fa-users fa-3x"></i>
                            <strong data-to="120">0</strong>
                            <!-- Set Your Number here. i,e. data-to="56" -->
                            <p>Usuarios Satisfechos</p>
                        </div>
                    </div>
                    <!-- third count item -->
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
                        <div class="counters-item">
                            <i class="fa fa-twitter fa-3x"></i>
                            <strong data-to="458">0</strong>
                            <!-- Set Your Number here. i,e. data-to="56" -->
                            <p>Followers en Twitter</p>
                        </div>
                    </div>
                    <!-- fourth count item -->
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
                        <div class="counters-item">
                            <i class="fa fa-globe fa-3x"></i>
                            <strong data-to="360">0</strong>
                            <!-- Set Your Number here. i,e. data-to="56" -->
                            <p>Viajes Compartidos</p>
                        </div>
                    </div>

                </div>

                <div class="clearfix aligncenter">
                    <div class="fancy-header1">
                        <h2 class="wow fadeIn animated">¿Aumentamos las estadísticas?</h2>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- / Fun Facts Section -->

    <!-- Footer -->
    <?php require_once 'footer-divider.html';?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Main jQuery -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- Single Page Nav -->
    <script src="js/jquery.singlePageNav.min.js"></script>
    <!-- jquery.fancybox.pack -->
    <script src="js/jquery.fancybox.pack.js"></script>
    <!-- jquery.mixitup.min -->
    <script src="js/jquery.mixitup.min.js"></script>
    <!-- jquery.parallax -->
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <!-- jquery.countTo -->
    <script src="js/jquery-countTo.js"></script>
    <!-- jquery.appear -->
    <script src="js/jquery.appear.js"></script>
    <!-- Contact form validation -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>

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

    <!-- Custom Functions -->
    <script src="js/custom.js"></script>

    <script>
        $(function(){
            $('a[href*=#]').click(function() {
                if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
                        && location.hostname == this.hostname) {
                    var $target = $(this.hash);
                    $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
                    if ($target.length) {
                        var targetOffset = $target.offset().top;
                        $('html,body').animate({scrollTop: targetOffset}, 1000);
                        return false;
                    }
                }
            });
        });
    </script>

</body>
</html>

