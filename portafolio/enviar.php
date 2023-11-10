<?php

     $servername = "localhost";
     $username = "admin";
     $password = "luysi01";
     $db = "portafolio";

     $nombre = $_GET['nombre'];
     $correo = $_GET['correo'];
     $mesg = $_GET['mensaje'];

     $conn = new mysqli($servername, $username, $password, $db);

     if($conn->connect_error){
	    die("Connection failed ".$conn->connect_error);
     }

     $sql = "insert into contacto (nombre, correo, mensaje) values('$nombre', '$correo', '$mesg')";
     $result = $conn->query($sql);

    $conn->close();

    $myfile = fopen("contactos.csv", "a") or die("no se puede abrir archivo!");
     
    $txt = $nombre . "," . $correo . "," . $mesg ."\n";

    fwrite($myfile, $txt);
    echo " <b> Guardado con exito</b>";
    
    fclose($myfile);

     ?>
