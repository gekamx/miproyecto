

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>

    <nav>
        <a href="index.php">Inicio </a>   
        <a href="contacto.php"> Contacto </a>  
    </nav>

            <h1>Usuario registrado con exito </h1>
<?php
      $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    echo "Su nombre es: " . $nombre"<br>";       
?>
</body>
</html>
                            