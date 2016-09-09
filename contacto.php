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

        #logo {width:200px; height: auto;}

        .jumbotron {
            background-color: #ffffff;
            padding-top: 50px;
            padding-bottom: 100px;
            color: #404040;
            text-align: center;
        }
        .jumbotron .container p.ppal {text-align: center; margin-top: 50px; font-size: 2.2em;}

        #formulario {margin-top: 50px;}

        .input-box {
            width: 65%;
            margin:auto;
        }
        .input-textarea {
            width: 80%;
            margin: auto;
        }

        footer {padding-top: 60px;}

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
            <p class="ppal">Contáctanos</p>

            <section id="formulario">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <br>
                                <p>Puedes enviarnos un mensaje y te atenderemos lo antes posible</p>
                            </div>
                            <div class="panel-body">
                                <form method="POST" id="form1" name="form1" action="contacto_action.php">
                                    <br>
                                    <label class="sr-only">Usuario</label>
                                    <input type="text" name="user" value="" maxlength="20" id="inputUser" class="form-control input-box" placeholder="Usuario" required>
                                    <br>
                                    <label for="inputPassword" class="sr-only">Contraseña</label>
                                    <input type="password" name="password" value="" maxlength="20" id="inputPassword" class="form-control input-box" placeholder="Contraseña" required>
                                    <br>
                                    <label>Mensaje para HereIAm</label><br>
                                    <textarea name="mensaje" rows="9" class="form-control input-textarea" required></textarea>
                                    <br>
                                    <div class="panel-footer text-muted">
                                        <strong>Note : </strong>Please note that we track all messages so don't send any spams.
                                    </div>
                                    <p>&nbsp;</p>
                                    <button class="btn btn-lg btn-primary" type="submit"><span class="glyphicon glyphicon-envelope"></span> Contactar</button>
                                    <input type="hidden" name="MM_insert" value="form1">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.jumbotron -->

    <!-- Footer -->
    <?php require_once 'footer-divider.html';?>

</body>
</html>