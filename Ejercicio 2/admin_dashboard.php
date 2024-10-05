<?php
session_start();
if ($_SESSION['rol'] !== 'Administrador') {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel de Administración</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Bienvenido, Administrador</h1>
        <a href="gestionar_propietarios.php" class="btn btn-primary mb-3">Gestionar Propietarios</a>
        <a href="gestionar_catastros.php" class="btn btn-primary mb-3">Gestionar Catastros</a>
        <a href="logout.php" class="btn btn-danger">Cerrar sesión</a>
    </div>
</body>
</html>
