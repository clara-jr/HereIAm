<?php 
if (!isset($_SESSION)) {
  session_start();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Subir Imagen</title>
</head>
<body>
<?php
    if ((isset($_POST["enviado"])) && ($_POST["enviado"] == "form1")) {
        $value = explode(".", $_FILES['userfile']['name']);
        if (($_FILES['userfile']['size']>2048000) || (end($value)!="jpg") )
            echo "Sólo se admiten ficheros de tamaño menor que 2MB y con extensión .jpg";
        else
        {
            $nombre_archivo = $_FILES['userfile']['name'];
            move_uploaded_file($_FILES['userfile']['tmp_name'], "images/usuarios/".$_SESSION['ID'].".jpg");
            ?>
            <script>
                self.close();
            </script>
        <?php
        }
    }
    else
    {?>
        <form action="gestionimagen.php" method="post" enctype="multipart/form-data" id="form1">
          <p>
            <input name="userfile" type="file" />
          </p>
          <p>
            <input type="submit" name="button" id="button" value="Subir Imagen" />
          </p>
          <input type="hidden" name="enviado" value="form1" />
        </form>
<?php }?>
</body>
</html>