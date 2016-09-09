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
	$cuerpo = $_POST['mensaje'];
	$email = $_SESSION['email'];

	//Consultar si los datos están guardados en la base de datos
	$consulta= "SELECT * FROM registros WHERE user='".$user."' AND password='".$codif."'";
	$fila=$db->query($consulta);
	$fila = $fila->fetchAll();

	if (!$fila) //opcion1: Si el usuario NO existe o los datos son INCORRRECTOS
	{
		echo '<script language = javascript>
		alert("Usuario o contraseña no registrados, por favor regístrese")
		self.location = "contacto.php"
		</script>';
	}
	else //opcion2: Usuario logueado correctamente
	{
		//Enviar correo
		mail('clarajimenezrecio@gmail.com','HEREIAM',$cuerpo, $email);
		echo '<script language = javascript>
		alert("Su mensaje ha sido enviado correctamente; le atenderemos lo antes posible")
		self.location = "contacto.php"
		</script>';
	}
?>