<?php
session_start();
if ($_SESSION['rol'] !== 'Administrador') {
    header("Location: login.php");
    exit();
}

include('c.php');  // Conexión a la base de datos

if (isset($_GET['id_catastro'])) {
    $id_catastro = $_GET['id_catastro'];

    // Eliminar catastro
    $stmt = $conexion->prepare("DELETE FROM catastro WHERE id_catastro = ?");
    $stmt->bind_param('i', $id_catastro);

    if ($stmt->execute()) {
        header("Location: gestionar_catastros.php");
        exit();
    } else {
        echo "Error al eliminar catastro.";
    }
}
?>
