 <?php
    include("conexion.php");

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    

        $sql = "INSERT INTO estudiante3 (nombre, correo) VALUES ('$nombre', '$correo')";

        if (mysqli_query($conexion, $sql)) {
            echo "<h1>Registrado con exito</h1>";
        } else {
            echo "<h1>Error al registrar</h1>";
        }

          ?>
         