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
        }

        .jumbotron {
            padding-top: 150px;
            padding-bottom: 250px;
            color: white;
            text-align: center;
            background: url('images/Europa.jpg') no-repeat center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .menu{text-align:center; margin:auto;}
        fieldset {margin:20px; margin-right: auto; margin-left: auto; padding:5px; border: 2px dashed #959595; min-width: 200px;}
        fieldset#fotos {max-width: 600px;}
        label.ciudad {font-size: 1.2em;}
        #ciudad {color:black;}
        input { font-size:0.7em;}
        textarea {color:black; width: 100%; height: 400px; -webkit-column-span: 100; column-span: 100;}
        #ciudad optgroup, #ciudad optgroup option {color:black;}
        @media only screen and (max-width:480px){
            input { font-size:0.45em;}
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

    <script type="text/javascript">
        function submitform() {
            $("#count_data").val($("#count").html());
            return true;
        }
    </script>

    <!-- Navigation -->
    <?php require_once 'headerwhite.html';?>

    <!-- .jumbotron -->
    <div class="jumbotron">

        <!-- .container -->
        <div class="container">

            <div class="menu">
                <form action="subir_action.php" method="post" accept-charset="utf-8" enctype="multipart/form-data" onsubmit="return submitform();">
                    <h3>¿Dónde has estado?</h3>
                    <span><label class="ciudad" for="ciudad" required>Ciudad:
                        <select name="ciudad" id="ciudad" required>
                            <optgroup label="España">
                                <option value='A Coruña, España' >A Coruña</option>
                                <option value='Álava, España'>Álava</option>
                                <option value='Albacete, España' >Albacete</option>
                                <option value='Alicante, España'>Alicante</option>
                                <option value='Almería, España' >Almería</option>
                                <option value='Asturias, España' >Asturias</option>
                                <option value='Ávila, España' >Ávila</option>
                                <option value='Badajoz, España' >Badajoz</option>
                                <option value='Barcelona, España'>Barcelona</option>
                                <option value='Burgos, España' >Burgos</option>
                                <option value='Cáceres, España' >Cáceres</option>
                                <option value='Cádiz, España' >Cádiz</option>
                                <option value='Cantabria, España' >Cantabria</option>
                                <option value='Castellón, España' >Castellón</option>
                                <option value='Ceuta, España' >Ceuta</option>
                                <option value='Ciudad Real, España' >Ciudad Real</option>
                                <option value='Córdoba, España' >Córdoba</option>
                                <option value='Cuenca, España' >Cuenca</option>
                                <option value='Gerona, España' >Gerona</option>
                                <option value='Las Palmas, España' >Las Palmas</option>
                                <option value='Granada, España' >Granada</option>
                                <option value='Guadalajara, España' >Guadalajara</option>
                                <option value='Guipúzcoa, España' >Guipúzcoa</option>
                                <option value='Huelva, España' >Huelva</option>
                                <option value='Huesca, España' >Huesca</option>
                                <option value='Jaén, España' >Jaén</option>
                                <option value='La Rioja, España' >La Rioja</option>
                                <option value='León, España' >León</option>
                                <option value='Lleida, España' >Lleida</option>
                                <option value='Lugo, España' >Lugo</option>
                                <option value='Madrid, España' >Madrid</option>
                                <option value='Malaga, España' >Málaga</option>
                                <option value='Melilla, España' >Melilla</option>
                                <option value='Murcia, España' >Murcia</option>
                                <option value='Navarra, España' >Navarra</option>
                                <option value='Orense, España' >Orense</option>
                                <option value='Palencia, España' >Palencia</option>
                                <option value='Palma de Mallorca, España' >Palma de Mallorca</option>
                                <option value='Pontevedra, España'>Pontevedra</option>
                                <option value='Salamanca, España'>Salamanca</option>
                                <option value='Santa Cruz de Tenerife, España' >Santa Cruz de Tenerife</option>
                                <option value='Segovia, España' >Segovia</option>
                                <option value='Sevilla, España' >Sevilla</option>
                                <option value='Soria, España' >Soria</option>
                                <option value='Tarragona, España' >Tarragona</option>
                                <option value='Teruel, España' >Teruel</option>
                                <option value='Toledo, España' >Toledo</option>
                                <option value='Valencia, España' >Valencia</option>
                                <option value='Valladolid, España' >Valladolid</option>
                                <option value='Vizcaya, España' >Vizcaya</option>
                                <option value='Zamora, España' >Zamora</option>
                                <option value='Zaragoza, España'>Zaragoza</option>
                            </optgroup>
                            <optgroup label="Francia">
                                <option value="Niza, Francia">Niza</option>
                                <option value="París, Francia">París</option>
                            </optgroup>
                            <optgroup label="Irlanda">
                                <option value="Dublín, Irlanda">Dublín</option>
                            </optgroup>
                            <optgroup label="Italia">
                                <option value="Florencia, Italia">Florencia</option>
                                <option value="Roma, Italia">Roma</option>
                            </optgroup>
                            <optgroup label="Países Bajos">
                                <option value="Ámsterdam, Países Bajos">Ámsterdam</option>
                            </optgroup>
                            <optgroup label="Portugal">
                                <option value="Lisboa, Portugal">Lisboa</option>
                            </optgroup>
                            <optgroup label="Reino Unido">
                                <option value="Londres, Reino Unido">Londres</option>
                            </optgroup>
                        </select>
                    </label></span>
                    <br><br><br><br>
                    <h3>Comparte tus fotografías</h3>
                    <fieldset id="fotos">
                        <p><label for="archivo">Subir fotografías<input type="file" name="archivo[]" id="archivo" value="Subir" placeholder="Subir" multiple required></label></p>
                    </fieldset>
                    <br><br>
                    <h3 style="margin-bottom:10px;">Comparte tu experiencia</h3>
                    <span class="row lead" style="margin:0;">
                        <span id="stars" class="starrr"></span>
                        Has valorado tu experiencia con <span id="count" name="count">0</span> estrellas
                    </span>
                    <fieldset>
                        <textarea name="mensaje" placeholder="Comparte tu experiencia..." maxlength="1860" required></textarea>
                    </fieldset>
                    <br><br><br>
                    <input type="hidden" id ="count_data" name="count_data" value="" />
                    <button class="btn btn-lg btn-primary" type="submit" value="Enviar">Enviar</button>
                </form>
            </div>

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
    <!-- jquery.stars -->
    <script src="js/stars.js"></script>

</body>
</html>