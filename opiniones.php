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

    <!-- Custom styles -->
    <style>

        body {
            padding-top: 0px;
            color: white;
        }

        .avatar {margin-bottom: 15px; border-radius:50%; background-position:center; background-repeat: no-repeat; background-size: 100%; height: 60px; width:60px; border: 2px solid #FFF;}

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
            padding-top: 110px;
            padding-bottom: 200px;
            text-align: center;
            background: url('images/FondoMapaMundi.jpg') no-repeat center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        .jumbotron .container {
            background-color:rgba(255,255,255,0);
            padding: 50px;
            text-align: justify;
        }
        .jumbotron .container a {
            color: #00aff0;
        }
        .jumbotron .container a:hover, .jumbotron .container a:focus {
            color: white;
        }
        .jumbotron .container .glyphicon {
            padding-left: 5px;
        }
        .jumbotron .container h4 {
            margin:0;
            padding-bottom: 10px;
        }
        .jumbotron .container .pager {margin-top:80px; font-size:1.4em;}
        .jumbotron .container .pager a {color:#6b798f; cursor:pointer;}
        .jumbotron .container .pager a:hover {color:#404040; text-decoration:none;}
        @media (max-width: 438px) {
            .jumbotron .container .pager {margin-top:50px; font-size:1em;}
            .jumbotron .container { padding: 15px; }
        }

        footer {padding-top: 50px;}

    </style>

</head>

<body>

    <script type="text/javascript" src="js/ajax.js"></script>
    <script type="text/javascript">
        function submitform(val) {
            $("#usuario").val(val);
            document.myform.submit();
        }
    </script>

    <!-- Navigation -->
    <?php require_once 'headerwhite.html';?>

    <!-- .jumbotron -->
    <div class="jumbotron">

        <!-- .container -->
        <div class="container">
            <form name="myform" action="perfil_usuario.php" method="post">
                <input type='hidden' id='usuario' name='usuario' value=''>
                <div id="contenido">
                    <?php include('paginador.php'); ?>
                </div>
            </form>
        </div>
        <!-- /.container -->

    </div>
    <!-- /.jumbotron -->

    <!-- Footer -->
    <?php require_once 'footer.html';?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/navbar.min.js"></script>

</body>
</html>