<!-- Solicitar al usuario la edad y al dar enviar el sistema muestre:
Si la edad es menos a 18 = “No es mayor de edad”
Si la edad es igual o mayor = “Es mayor de edad”-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edades</title>
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

<p>Edades</p>

<form action="edades.php" method= "post">
      <input type="text"  name="edad" size="20">
      

     

      <input type="submit" value="enviar">   
                        

  </form>

  <br>

  <?php
   
   $edad = $_POST["edad"];
   if ($edad != ""){
   if ($edad<18) {
    echo "No es mayor de edad";
   } else {
    echo "Es mayor de edad";
   }
}
   



?>
