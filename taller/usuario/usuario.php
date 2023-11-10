<!--Realizar un programa que pida el nombre, apellido y número de cédula del usuario y
mediante el método GET capture los datos y lo envíe a otra página que muestro esos datos-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
</head>
<body>

<div id="menu" >
        <h5><a href="index.html">Home</a><h5>
        <h5><a href="calculadora.php">Calculadora</a></h5>
        <h5><a href="usuario.php">usuario</a></h5>
        <h5><a href="edades.php">Edades</a></h5>
        <h5><a href="comparacion.php">comparacion</a></h5>
        <h5><a href="filtrar.php">comparacion</a></h5>
        

    </div>

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