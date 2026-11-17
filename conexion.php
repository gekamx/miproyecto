<?php
$conexion = mysqli_connect("localhost","root","","dat");

if($conexion) {
echo "Conexion exitosa";
}else {
echo "Conexión fallida";

}
?>

