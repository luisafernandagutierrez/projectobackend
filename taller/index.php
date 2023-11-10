<!-- Realice un programa que mediante un formulario, solicite 2 números y pregunte al usuario
el tipo de operación que desee (SUMA, RESTA, MULTIPLICACIÓN Y DIVISIÓN) y muestre el
resultado de la operación-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Calculadora</title>
</head>


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




<body>
<p>Calculadora</p>
<form action="calculadora.php" method= "post">
      <input type="text"  name="num1" size="20" placeholder="Digite numero 1">
      <input type="text"  name="num2" size="20" placeholder="Digite numero 2">

      <select name="operacion" id="operacion">
  <option value="Suma">suma</option>
  <option value="Resta">Resta</option>
  <option value="Multiplicacion">Multiplicacion</option>
  <option value="Division">Division</option>
   <br>

  <input type="submit" value="resultado">   
                        
  </select>
  </form>

  <br>


<?php
 $oper1 = $_POST["operacion"];

switch ($oper1){
    case "Suma";
    echo "El resultado de sumar  es  " .$_POST["num1"] + $_POST["num2"];
    break;
    case "Resta";
    echo "El resultado de restar " .$_POST["num1"] - $_POST["num2"];
    break;
    case "Multiplicacion";
    echo "El resultado de multiplicar " .$_POST["num1"] * $_POST["num2"];
    break;
    case "Division";
    echo "El resultado de dividir " .$_POST["num1"] / $_POST["num2"];
    break;

}








?>



    
</body>
</html>
