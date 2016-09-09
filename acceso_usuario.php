<meta charset="utf-8" />
<?php 
	require_once 'conex.php';

	//Inicio de variables de sesión
	if (!isset($_SESSION)) {
	  session_start();
	}

	//Recibir los datos ingresados en el formulario
	$user = $_POST['user'];
	$password = $_POST['password'];
	$codif = md5($password);

	//Consultar si los datos están guardados en la base de datos
	$consulta= "SELECT * FROM registros WHERE user='".$user."' AND password='".$codif."'"; 

	$fila = $db->query($consulta);
	$nfilas = $fila->fetchAll();
	//$fila->setFetchMode(PDO::FETCH_ASSOC);
	$fila = $db->query($consulta);
	$datos = $fila->fetch();

	$validado = (!empty($user) && !empty($password));
	if (!$nfilas || !$validado) //opcion1: Si el usuario NO existe o los datos son INCORRECTOS
	{
		echo '<script language = javascript>
		alert("Usuario o contraseña erróneos")
		self.location = "index.php"
		</script>';
	}
	else //opcion2: Usuario logueado correctamente
	{
		//Definimos las variables de sesión y redirigimos a la página de usuario
		$_SESSION['ID'] = $datos['ID'];
		$_SESSION['user'] = $datos['user'];
		$_SESSION['email'] = $datos['email'];
		
		header("Location: continentes.php");
	}
?>