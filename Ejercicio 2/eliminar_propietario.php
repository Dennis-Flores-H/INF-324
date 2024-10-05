<?php
session_start();
if ($_SESSION['rol'] !== 'Administrador') {
    header("Location: login.php");
    exit();
}

include('c.php');  // Conexión a la base de datos

if (isset($_GET['carnet'])) {
    $carnet = $_GET['carnet'];

    // Eliminar propietario
    $stmt = $conexion->prepare("DELETE FROM propietario WHERE carnet = ?");
    $stmt->bind_param('i', $carnet);

    if ($stmt->execute()) {
        header("Location: gestionar_propietarios.php");
        exit();
    } else {
        echo "Error al eliminar propietario.";
    }
}
?>
