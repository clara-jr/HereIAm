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

    $consulta= "SELECT * FROM registros WHERE ID='".$ID."'";
    $fila=$db->query($consulta);
    $fila = $fila->fetch();
    $user = $fila['user'];

    function fn_MostrarFotoPerfil($identificador) {
        if (is_file("images/usuarios/".$identificador.".jpg")) {
            ?>
            <div id="avatar" width="70" style="background-image: url(images/usuarios/<?php echo $identificador; ?>.jpg);"></div>
        <?php
        }
        else {
            ?>
            <div id="avatar" width="70" style="background-image: url(images/usuarios/user_0.png);"></div>
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

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

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

        #avatar {margin: auto; margin-bottom: 20px; border-radius:50%; background-position:center; background-repeat: no-repeat; background-size: 100%; height: 70px; width:70px; border: 2px solid #FFF;}

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
            padding-top: 150px;
            padding-bottom: 800px;
            color: white;
            text-align: center;
            background: url('images/FondoMapaMundi.jpg') no-repeat center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        ul#PaisesVisitados {margin:0; padding:0;}
        ul#PaisesVisitados li{ list-style:none; margin-bottom:5px;}
        ul#PaisesVisitados li a{text-decoration:none; color:white; font-size:2em;}
        ul#PaisesVisitados li a:hover, ul#PaisesVisitados li a:focus{color:#6b798f;}

        footer {padding-top: 50px;}

    </style>

</head>

<body>

    <script type="text/javascript">
    function submitform(val) {
      $("#destino").val(val);
      document.myform.submit();
    }
    </script>

    <!-- Navigation -->
    <?php require_once 'headerwhite.html';?>

    <!-- .jumbotron -->
    <div class="jumbotron">

        <!-- .container -->
        <div class="container">

            <?php if (isset($ID)) {
                echo fn_MostrarFotoPerfil($ID);
            ?>
            <h3><span><?php echo $user; ?></span> ha estado en:</h3>
            <ul id="PaisesVisitados">
                <form name="myform" action="viaje.php" method="post">
                    <input type='hidden' id='destino' name='destino' value=''>
                <?php
                    $registros = "SELECT * FROM viajes WHERE ID='".$ID."'";
                    foreach ($db->query($registros) as $registro) {?>
                        <li><a href="javascript: submitform('<?php echo $registro['ciudad']; ?>')"><?php echo $registro['ciudad']; ?></a></li>
                <?php }?>
                </form>
            </ul>

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
<?php }?>