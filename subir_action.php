<meta charset="utf-8" />
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

	$user = $_SESSION['user'];
	$ID = $_SESSION['ID'];

	ini_set('display_errors', 'On');
	error_reporting(E_ALL | E_STRICT);

	function is_valido($fichero, $i) {
		$extValidas = array("gif", "jpeg", "jpg", "png");
		$temp = explode(".", $_FILES[$fichero]['name'][$i]);
		$extension = end($temp);
		$tipo = $_FILES[$fichero]['type'][$i];
		$tiposValidos = array("image/jpeg", "image/jpg", "image/pjpeg", "image/x-png", "image/png");
		$maxTamano = 1000000;//1048576;
		return (in_array($extension, $extValidas) && in_array($tipo, $tiposValidos) && ($_FILES[$fichero]['size'][$i] < $maxTamano));
	}

	function mueveFichero($origen, $destino) {
		move_uploaded_file($origen, $destino);
	}

	function existe_directorio($destino) {
		return file_exists($destino) && is_dir($destino);
	}

	if( strtolower( $_SERVER[ 'REQUEST_METHOD' ] ) == 'post' && !empty( $_FILES ) ) {
		$ciudad = $_POST['ciudad'];
		$f = 'archivo';
		$d = 'images/ciudades/'.$ciudad.$_SESSION['ID'].'/';
		$dcrear = 'images/ciudades/'.$ciudad.$_SESSION['ID'];

		$count = 0;
		$exito = 0;
		foreach ($_FILES[$f]['name'] as $i => $name) {
			if ((strlen($_FILES[$f]['name'][$i])) > 1 && is_valido($f, $i)) {
				if (!existe_directorio($d)) {
					mkdir($dcrear, 0777, true);
					if (move_uploaded_file($_FILES[$f]['tmp_name'][$i], $d . $name)) {
						$count++;
						$exito = 1;
					}
				}
				else {
					if (move_uploaded_file($_FILES[$f]['tmp_name'][$i], $d . $name)) {
						$count++;
						$exito = 1;
					}
				}
			}
		}
		if ($exito == 1) {
			$hoy = getdate();
			$fecha = $hoy['mday'] . " " . $hoy['month'] . " " . $hoy['year'];
			$ciudad = $_POST['ciudad'];
			$texto = $_POST['mensaje'];
			$stars = $_POST['count_data'];
			$sql_insert = "INSERT INTO viajes (orden, ID, user, ciudad, texto, stars, fecha) VALUES ('', '$ID', '$user', '$ciudad', '$texto', '$stars', '$fecha')";
			try {
				$resultado = 	$db->query($sql_insert); // query para insert, update, delete
			}catch(Exception $error) {
				echo '<script language = javascript>
				alert("Ha habido un error en la subida de la entrada. Inténtelo de nuevo más tarde.")
				self.location = "continentes.php";
				</script>';
			}
			echo '<script language = javascript>
			self.location = "perfil.php"
			</script>';
		}
		else {
			echo '<script language = javascript>
			alert("Ha habido un error en la subida de la entrada. No se permiten imágenes de tamaño mayor a 1MB ni con extensión distinta a jpg, jpeg, pjpeg, png o x-png.")
			self.location = "continentes.php";
			</script>';
		}
	}
	else {
		echo '<script language = javascript>
		alert("Ha habido un error en la subida de la entrada. Recuerde que sólo se permiten imágenes de tamaño del orden KB.")
		self.location = "continentes.php";
		</script>';
	}
?>