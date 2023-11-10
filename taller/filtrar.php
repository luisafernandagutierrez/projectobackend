<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <style>
  </style>
<script>

<?php

     $servername = "localhost";
     $username = "admin";
     $password = "luysi01";
     $db = "mi_proyecto";

     $conn = new mysqli($servername, $username, $password, $db);

     if($conn->connect_error){
	    die("Connection failed ".$conn->connect_error);
     }

     $sql = "select * from usuarios";
     $result = $conn->query($sql);

     if ($result->num_rows > 0){
	     echo 'var dataori  = [';

             while($row = $result->fetch_assoc() ){
	           echo   "{ 'camp1': '" . $row["nombre"]  ." ', 'camp2': '" .$row["apellido"] . "', 'camp3' : '" . $row["cedula"] . "' }," ; 
            }
            echo "  ];"; 
      } else {
	       echo "0 records";
      }

      $conn->close();

     ?>


     // aca finaliza

     var datafil = dataori;

     function tbcls () {

          // borra tabla 

          var thr = 1;
          var tabla = document.getElementById('pcasos');
          var rc = tabla.rows.length;

          for (var i = thr; i < rc; i++) {
               tabla.deleteRow(thr);
          }

     }

     function load_datos() {
	   //carga datos del array original a la tabla de resultados

	   let txt = '';
           let ldtabla = document.getElementById('pcasos');
	   let row,cel1,cel2,cel3 

	   tbcls();

           for (let i = 0; i < datafil.length; i++) {

	        row = ldtabla.insertRow(datafil.lenght);
		cel1 = row.insertCell(0);
  		cel2 = row.insertCell(1);
  		cel3 = row.insertCell(2);
		cel1.innerHTML = datafil[i].camp1;
		cel2.innerHTML = datafil[i].camp2;
		cel3.innerHTML = datafil[i].camp3;

	       }

     }

     function retabla(tid){
	  // redibuja la tabla con base a donde esciban

	  let text, result, sfind, gt = "sdata";

	  datatmp = [];
	
          for (let i = 0; i < dataori.length; i++) {

	       if (tid === "nm"){
	            text = dataori[i].camp1;
		    gt = "nbusca";   

	       } else if (tid === "ap") {
	            text = dataori[i].camp2;
		    gt = "abusca";   

	       } else if (tid === "ce") {
	            text = dataori[i].camp3;
		    gt = "cbusca";   

	       } else {
	            text = dataori[i].camp1 + " " + dataori[i].camp2 + " " + dataori[i].camp3;

	       }

	       sfind =  document.getElementById(gt).value;
               result = text.indexOf(sfind);

	       if(result >= 0){
		       arr =  { camp1: dataori[i].camp1, camp2: dataori[i].camp2, camp3: dataori[i].camp3 } ;
		       datatmp.push( arr );
	            }     
	   }

	  datafil = datatmp;
	  load_datos();

     }

     window.onload = () => {
          // debe pintar la tabla al iniciar
          load_datos();

     }

  </script>
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

<p>Filtrar</p>
      <label> Buscar todo: </label>  <input type="text" id="sdata" name="fname" value="" oninput="retabla('all')">
      <br>
      <br>
</div>

<div id="casos" class="tabcontent">
 
  <div class="container">
  <table class="table"  id="pcasos">
    <thead>
          <tr> 
                <th>Nombre<br> <input type="text" id="nbusca" name="fname" value=""  oninput="retabla('nm')" > </th>
                <th>Apellido<br> <input type="text" id="abusca" name="fname" value=""  oninput="retabla('ap')"> </th>
                <th>Cedula<br> <input type="text" id="cbusca" name="fname" value=""  oninput="retabla('ce')"> </th>
          </tr>

    </thead>
    <tbody>

    </tbody>
    
    </table>
  </div>

</div>

</body>
</html> 
