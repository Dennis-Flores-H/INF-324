<?php
session_start();
if ($_SESSION['rol'] !== 'Administrador') {
    header("Location: login.php");
    exit();
}

include('c.php');  // Conexión a la base de datos

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $carnet = $_POST['carnet'];
    $nombre = $_POST['nombre'];
    $paterno = $_POST['paterno'];

    $stmt = $conexion->prepare("INSERT INTO propietario (carnet, nombre, paterno) VALUES (?, ?, ?)");
    $stmt->bind_param('iss', $carnet, $nombre, $paterno);

    if ($stmt->execute()) {
        header("Location: gestionar_propietarios.php");
        exit();
    } else {
        echo "Error al añadir propietario.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Añadir Propietario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Añadir Propietario</h1>
        <a href="gestionar_propietarios.php" class="btn btn-secondary mb-3">Volver</a>

        <form action="añadir_propietario.php" method="POST">
            <div class="mb-3">
                <label for="carnet" class="form-label">Carnet</label>
                <input type="number" class="form-control" id="carnet" name="carnet" required>
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="paterno" class="form-label">Apellido Paterno</label>
                <input type="text" class="form-control" id="paterno" name="paterno" required>
            </div>
            <button type="submit" class="btn btn-primary">Añadir Propietario</button>
        </form>
    </div>
</body>
</html>
