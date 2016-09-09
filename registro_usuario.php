<meta charset="utf-8" />
<?php
	require_once 'conex.php';

	$nombre = $_POST['user'];
    $pw = $_POST['password'];
    $pw2 = $_POST['password2'];
    $email = $_POST['email'];

	//Consultar si los datos están guardados en la base de datos
	$consulta= "SELECT * FROM registros WHERE user='".$nombre."'"; 
	$fila=$db->query($consulta);
	$fila = $fila->fetchAll();

	$validado = (!empty($nombre) && !empty($pw) && !empty($pw2) && !empty($email));
	if (!$fila && $validado && $pw===$pw2) { // Si el usuario NO existe y todos los campos son correctos
		echo '<script language = javascript>
		alert("¡BIENVENIDO A HEREIAM! EL PROCESO DE REGISTRO SE HA DESARROLLADO CORRECTAMENTE")
		self.location = "index.php"
		</script>';
		$sql_insert = "INSERT INTO `registros` (ID, user, password, email) VALUES ('', '$nombre', md5('$pw'), '$email')";
		try {
			$resultado = 	$db->query($sql_insert); // query para insert, update, delete
		}catch(Exception $error) {
			echo '<script language = javascript>
			alert("ERROR. Fallo al registrarse.")
			self.location = "index.php"
			</script>';
		}
    }
    else {
    	if ($pw!==$pw2) {
			echo '<script language = javascript>
			alert("ERROR. La contraseña no ha sido repetida correctamente")
			self.location = "index.php"
			</script>';
		}
		else {
	    	echo '<script language = javascript>
			alert("ERROR. El nombre de usuario introducido ya está registrado")
			self.location = "index.php"
			</script>';
		}
	}
?>