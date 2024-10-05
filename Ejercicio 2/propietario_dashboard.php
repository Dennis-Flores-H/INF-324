<?php
session_start();
if ($_SESSION['rol'] !== 'Propietario') {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel de Propietario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Bienvenido, Propietario</h1>
        <a href="ver_propietarios.php" class="btn btn-primary mb-3">Ver Propietarios</a>
        <a href="ver_catastros.php" class="btn btn-primary mb-3">Ver Catastros</a>
        <a href="logout.php" class="btn btn-danger">Cerrar sesión</a>
    </div>
</body>
</html>
