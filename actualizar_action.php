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

    $nombre = $_POST['user'];
    $pw = $_POST['password'];
    $codif = md5($pw);
    $pw2 = $_POST['password2'];
    $ID = $_SESSION['ID'];

    //Consultar si los datos están guardados en la base de datos

    if ($nombre !== "") {
        if ($pw === "" || $pw!==$pw2) {
            $sql_update1 = "UPDATE registros SET user='$nombre' WHERE ID='".$ID."'";
            $sql_update2 = "UPDATE viajes SET user='$nombre' WHERE ID='".$ID."'";
            try {
                $resultado1 =    $db->query($sql_update1); // query para insert, update, delete
                $resultado2 =    $db->query($sql_update2); // query para insert, update, delete
                echo '<script language = javascript>
                alert("Se ha modificado su nombre de usuario")
                self.location = "actualizar.php"
                </script>';
            }catch(Exception $error) {
                echo '<script language = javascript>
                alert("ERROR. Fallo al actualizar sus datos.")
                self.location = "actualizar.php"
                </script>';
            }
        }
        else if ($pw !== "" && $pw===$pw2) {
            $sql_update1 = "UPDATE registros SET user='$nombre', password='$codif' WHERE ID='".$ID."'";
            $sql_update2 = "UPDATE viajes SET user='$nombre' WHERE ID='".$ID."'";
            try {
                $resultado1 =    $db->query($sql_update1); // query para insert, update, delete
                $resultado2 =    $db->query($sql_update2); // query para insert, update, delete
                echo '<script language = javascript>
                alert("Se ha modificado su nombre de usuario y su contraseña")
                self.location = "actualizar.php"
                </script>';
            }catch(Exception $error) {
                echo '<script language = javascript>
                alert("ERROR. Fallo al actualizar sus datos.")
                self.location = "actualizar.php"
                </script>';
            }
        }
    }

    else if ($pw !== "" && $pw===$pw2) {
        $sql_update = "UPDATE registros SET password='$codif' WHERE ID='".$ID."'";
        try {
            $resultado =    $db->query($sql_update); // query para insert, update, delete
            echo '<script language = javascript>
            alert("Se ha modificado su contraseña")
            self.location = "actualizar.php"
            </script>';
        }catch(Exception $error) {
            echo '<script language = javascript>
            alert("ERROR. Fallo al actualizar sus datos.")
            self.location = "actualizar.php"
            </script>';
        }
    }

    else if ($pw !== "" && $pw!==$pw2) {
        echo '<script language = javascript>
        alert("ERROR. La contraseña no ha sido repetida correctamente")
        self.location = "actualizar.php"
        </script>';
    }

    else {
        echo '<script language = javascript>
        self.location = "actualizar.php"
        </script>';
    }
?>