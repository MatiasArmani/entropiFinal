<?php
$servername = "localhost";
$username = "u104620664_entripi";
$password = "!Entropi123";
$dbname = "u104620664_entropi";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    echo "hola";
}
?>
