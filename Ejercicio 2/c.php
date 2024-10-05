<?php
$host = "localhost";
$dbname = "BDDennis";  // Cambia por tu nombre de base de datos
$username = "root";          // Cambia por tu usuario de MySQL
$password = "";       // Cambia por tu contraseña de MySQL

// Crear conexión
$conexion = new mysqli($host, $username, $password, $dbname);

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
