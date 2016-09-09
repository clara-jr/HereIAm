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
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

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

        .avatar {margin-left: auto; margin-right: auto; width: 300px; margin-top: 70px;}
        @media (max-width: 438px) {
            .avatar {width: 200px;}
            .team-wrapper .team-inner {
                padding: 150px 0 10px;
            }
        }

        #logo {width:200px; height: auto;}

        .jumbotron {
            background-color: #fff ;
            padding-top: 50px;
            padding-bottom: 100px;
            color: #404040;
            text-align: center;
        }
        .jumbotron .container .text p {width:70%; text-align:justify; margin: 30px auto; font-size: 1.2em;}

        .cert {color:#5bc0de;}
        .cert:hover {color:#404040;}

        footer {padding-top: 100px;}

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

    <!-- .container -->
    <div class="container">

        <img id="logo" src="images/logo-gris.png">

        <!--TEAM SECTION START-->
        <section id="team" >
            <div class="container">
                <div class="row animate-in" data-anim-type="fade-in-up">
                    <div class="avatar">
                        <div class="team-wrapper">
                            <div class="team-inner" style="background-image: url('images/avatar.jpg')" >
                                <a href="https://github.com/clara-jr" target="_blank" > <i class="fa fa-github" ></i></a>
                            </div>
                            <div class="description">
                                <h4> Clara Jiménez Recio</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--TEAM SECTION END-->

        <div class="text">
            <p>
                Estudiante de <strong>Grado en Ingeniería de Tecnologías y Servicios de Telecomunicación</strong> en la Escuela Técnica Superior de Ingenieros de Telecomunicación de la Universidad Politécnica de Madrid.
                <br>
                Apasionada por el sector de la Programación Web, decidí desarrollar esta plataforma durante mi tercer curso de carrera para la asignatura Tecnologías Web de Cliente.
            </p>
            <p>
                <span style="font-style:italic;">No todo es la Universidad</span><br>
                He desarrollado un proyecto de programación en Java para el estudio de variables aleatorias bidimensionales.<br>
                He participado en cursos no presenciales sobre el desarrollo de aplicaciones móviles para Android con eventos MultiTouch.<br>
                He realizado recientemente un curso MOOC de desarrollo en HTML5, CSS y Javacript de WebApps y aplicaciones móviles FirefoxOS. <a class="cert" target="_blank" href="https://www.miriadax.net/files/10132/badge/c8164061-240c-48da-83fe-835fadd7cc02.pdf">Certificado de Participación: «Desarrollo en HTML5, CSS y Javascript de WebApps, incluyendo móviles FirefoxOS»</a><br>
            </p>
            <p>
                <span style="font-style:italic;">HEREIAM</span><br>
                La plataforma web de HereIAm ha sido desarrollada haciendo uso de diseños "responsive" para la correcta adaptación en dispositivos móviles o tabletas.
                Concretamente, recurrí al plugin de Bootstrap, que siendo de código abierto, representa el HTML, CSS y JS más popular para el desarrollo de proyectos multidispositivo de forma rápida y con calidad.
                Siendo yo la programadora y desarrolladora web de HereIAm, seré la encargada de gestionar y actualizar la estructura y los servicios de la página para cubrir las necesidades de los usuarios.
            </p>
            <p>
                El desarrollo de la web queda detallado en el siguiente blog: <br>
                <a class="cert" target="_blank" href="https://clarajimenezrecio.wordpress.com/">https://clarajimenezrecio.wordpress.com/</a><br>
            </p>
            <p>
                Si mi proyecto web te ha sido de utilidad, adelante, ¡difúndelo! <br>
                ¡Muchas gracias y disfruta de mis servicios!
            </p>
            <p>
                <strong>HereIAm - CJR</strong>
            </p>
        </div>

    </div>
    <!-- /.container -->

</div>
<!-- /.jumbotron -->

<!-- Footer -->
<?php require_once 'footer-divider.html';?>

</body>
</html>