<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="index.php">Inicio </a>   
        <a href="contacto.php"> Contacto </a>  
    </nav>
        <h1> REGISTRAME  </h1>
        <form action="reg_bd.php" method="POST">
         <label for="nombre"> Nombre</label>
         <input  type="text" id="nombre" name="nombre" >
         <br>
         <label for="email"> E-mail</label> 
         <input  type="email"  name="correo" >
         <br><br>
         <input type="submit"  value="Registrame">
        </form>
</body>

</html>