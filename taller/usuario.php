<!--Realizar un programa que pida el nombre, apellido y número de cédula del usuario y
mediante el método GET capture los datos y lo envíe a otra página que muestro esos datos-->


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

<p>Usuario</p>

<form action="resultado.php" method= "get">
    <label>Nombre:  </label>   <input type="text"  name="nombre" size="20"> <br>
    <label>Apellido:  </label>   <input type="text"  name="apellido" size="20"> <br>
    <label>Cedula:  </label>   <input type="text"  name="cedula" size="20"><br>


      <input type="submit" value="enviar">   


  </form>

  <br>



</body>
</html>
