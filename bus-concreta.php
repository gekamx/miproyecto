<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador con php</title>
</head>
<body>
<div id="search">
    <!-- El formulario envía los datos a esta misma página (index.php) -->
    <form action="bus-concreta.php" method="GET">
        <input type="text" name="busqueda" placeholder="Escriba la palabra a buscar..." required>
        <input type="submit" value="buscar">
    </form>
</div>

<div id="resultados">
<?php
require_once 'conexion.php';

// 1. Verificar si el usuario ha realizado una búsqueda
if (isset($_GET['busqueda']) && !empty(trim($_GET['busqueda']))) {
    
    // Capturar y limpiar el término de búsqueda
    $busqueda = trim($_GET['busqueda']);
    
    // 2. Modificar la consulta SQL para filtrar por el campo 'Nombre'
    // El símbolo ? es un marcador de posición seguro
    $consulta = "SELECT * FROM estudiante3 WHERE Nombre LIKE ?";
    
    // 3. Preparar la consulta
    if ($stmt = mysqli_prepare($conexion, $consulta)) {
        
        // Agregar los comodines % para buscar coincidencia parcial (ej. "juan" encontrará "Juan Carlos")
        $termino_con_comodines = "%" . $busqueda . "%";
        
        // Vincular el parámetro ("s" significa que es una cadena/string)
        mysqli_stmt_bind_param($stmt, "s", $termino_con_comodines);
        
        // Ejecutar la consulta
        mysqli_stmt_execute($stmt);
        
        // Obtener los resultados
        $resultado = mysqli_stmt_get_result($stmt);
        
        // 4. Verificar si se encontraron registros
        if (mysqli_num_rows($resultado) > 0) {
            
            // Desplegar los registros encontrados
            while ($fila = mysqli_fetch_assoc($resultado)) {
                ?>
                <div class="items">
                    <h2><?php echo htmlspecialchars($fila['Nombre']); ?></h2>
                    <h2><?php echo htmlspecialchars($fila['Correo']); ?></h2>
                </div>
                <?php
            }
            
        } else {
            echo "<p>No se encontraron estudiantes con el nombre: <strong>" . htmlspecialchars($busqueda) . "</strong></p>";
        }
        
        // Cerrar la consulta preparada
        mysqli_stmt_close($stmt);
    }
} else {
    // Mensaje opcional cuando el usuario entra a la página por primera vez sin buscar nada
    echo "<p>Ingresa un nombre en el buscador superior para comenzar.</p>";
}
?>
</div>
</body>
</html>
