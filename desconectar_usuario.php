<meta charset="UTF-8" />
<?php 
	session_start();

	if ($_SESSION['user'])
	{
		session_destroy();
		echo '<script language = javascript>
		alert("Su sesión ha finalizado correctamente")
		self.location = "index.php"
		</script>';}
	else
	{
		echo '<script language = javascript>
		alert("No ha iniciado ninguna sesión, por favor regístrese")
		self.location = "index.php"
		</script>';
	}
?>