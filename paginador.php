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

	function fn_MostrarFotoPerfil($identificador) {
	    if (is_file("images/usuarios/".$identificador.".jpg")) {
	        ?>
	        <div class="avatar" width="70" style="background-image: url(images/usuarios/<?php echo $identificador; ?>.jpg);"></div>
	    <?php
	    }
	    else {
	        ?>
	        <div class="avatar" width="70" style="background-image: url(images/usuarios/user_0.png);"></div>
	    <?php
	    }
	}

	$RegistrosAMostrar=5;

	//estos valores los recibo por GET
	if(isset($_GET['pag'])){
	    $RegistrosAEmpezar=($_GET['pag']-1)*$RegistrosAMostrar;
	    $PagAct=$_GET['pag'];
	    //caso contrario los iniciamos
	}else{
	    $RegistrosAEmpezar=0;
	    $PagAct=1;
	}

	$sql = "SELECT * FROM viajes ORDER BY orden DESC LIMIT $RegistrosAEmpezar, $RegistrosAMostrar";

	foreach ($db->query($sql) as $fila) {
		?>
	    <div class="row">
	        <?php echo fn_MostrarFotoPerfil($fila['ID']); ?>
	        <h4><strong><?php echo $fila['ciudad']; ?></strong></h4>
	        <p><?php echo $fila['texto']; ?></p>
	        <p>
	            <span class="glyphicon glyphicon-user"></span> by <a href="javascript: submitform('<?php echo $fila['ID']; ?>')"><strong><?php echo $fila['user']; ?></strong></a>
	            | <span class="glyphicon glyphicon-calendar"></span> <?php echo $fila['fecha']; ?>
	            | <span class="glyphicon glyphicon-globe"></span> <?php echo $fila['ciudad']; ?> |
	            <?php
	                for ($i = 0; $i < $fila['stars']; $i++) { ?>
	                    <span class="glyphicon glyphicon-star" style="padding: 0; margin: 0;"></span>
	               <?php }
	            ?>
	        </p>
	        <hr>
	        <br>
	    </div>
	<?php }

	$sqlregistros = "SELECT count(*) FROM viajes";
	$NroRegistros = $db->query($sqlregistros)->fetchColumn();
	$PagAnt=$PagAct-1;
	$PagSig=$PagAct+1;
	$PagUlt=$NroRegistros/$RegistrosAMostrar;

	//verificamos residuo para ver si llevará decimales
	$Res=$NroRegistros%$RegistrosAMostrar;
	// si hay residuo usamos funcion floor para que me
	// devuelva la parte entera, SIN REDONDEAR, y le sumamos
	// una unidad para obtener la ultima pagina
	if($Res>0) $PagUlt=floor($PagUlt)+1;

	//desplazamiento

	?><ul class="pager"><?php
	if($PagAct>1) { ?>
	    <li class="previous"><?php echo "<a onclick=\"Pagina('$PagAnt')\">&larr; Anterior</a>"?></li> <?php }
	if($PagAct<$PagUlt) { ?>
	    <li class="next"><?php echo "<a onclick=\"Pagina('$PagSig')\">Siguiente &rarr;</a>"?></li> <?php }  ?>
	</ul>

