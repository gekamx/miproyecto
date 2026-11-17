<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador con php</title>
</head>
<body>
<div id="search">
<form action="buscar.php" method="GET">
    <input type="text" name="busqueda" placeholder="Escriba la palabra a buscar..." required>
    <input type="submit" value="buscar">
   </form>
</div>
<div id="resultados">
<?php
require_once 'conexion.php';
$consulta = "SELECT * FROM estudiante3";
$resultado = mysqli_query($conexion, $consulta);    
while ($fila = mysqli_fetch_assoc($resultado)) {
    ?>
    <div class="items">
        <h2><?php echo $fila['Nombre']; ?></h2>
        <h2><?php echo $fila['Correo']; ?></h2>
    </div>
<?php}
?>
</body>
</html>

