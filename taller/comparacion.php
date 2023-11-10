<!--Solicitar al usuario la fecha de nacimiento y al dar enviar el sistema calcule y haga una
comparación con la fecha actual y visualize :
• Si la edad es menor a 18 = “Su edad es” + edad + ” por tanto: No es mayor de edad”
• Si la edad es igual o mayor = “Su edad es” + edad + ” por tanto: Es mayor de edad”-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparacion</title>
     <link rel="stylesheet" href="css/style.css">

</head>
<body>


<div id="menu" >
        <a href="index.php">Calculadora</a>
        <a href="usuario.php">Usuario</a>
        <a href="edades.php">Edades</a>
        <a href="comparacion.php">Comparacion</a>
        <a href="filtrar.php">Filtrar</a>
        

    </div>

<p>Comparacion</p>

<form action="" method= "post">
      <label for = "f1"> Fecha de nacimineto: </label>
      <input type="date" name="FechaN" id="FechaN">
      <label for ="f2">Fecha actual: </label>
      <input type="Date" name="FechaA" id="FechaA">


     
      <input type="submit" value="enviar">   
                        

  </form>

  <?php

   $FechaA = $_POST["FechaA"];
   $FechaN = $_POST["FechaN"];

   $edad= strtotime($FechaA) - strtotime($FechaN);
   $edad=intval($edad/60/60/24/365.25);

   if($edad<17)
{
   echo "Su edad es. ".$edad."<br>"." por lo tanto: No es mayor de edad";
}

 else{
    echo "Su edad es. ".$edad."<br>"." por lo tanto: Es mayor de edad"; 
 }





  ?>






    
</body>
</html>
