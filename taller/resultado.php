

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
        <link rel="stylesheet" href="css/style.css">

</head>
<body>

<div class ="contenedor-navegación">
        <nav class="nav-principal contenedor">
            <a href="index.php">Calculadora</a>
            <a href="usuario.php">Usuario</a>
            <a  href="edades.php">Edades</a>
            <a href="comparacion.php">Comparacion</a>
            <a href="filtrar.php">Filtrar</a>
        </nav>
        </div>
        
        
        <div class="hero"></div>
<br>

<?php

     echo "Nombre : ".$_GET["nombre"]."<br>";
     echo "Apellido : ".$_GET["apellido"]."<br>";
     echo "Cedula : ".$_GET["cedula"]."<br>";

?>


</body>
</html>

