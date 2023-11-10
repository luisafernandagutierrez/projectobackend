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
while($row = $result->fetch_assoc() ){
	echo $row["id"] ."  " .$row["nombre"]. " " .$row["apellido"]. "<br>";
}
} else {
	echo "0 records";
}
$conn->close();

?>