<?php
session_start();
if ($_SESSION['rol'] !== 'Propietario') {
    header("Location: login.php");
    exit();
}

include('c.php');  // Conexión a la base de datos

// Consulta para obtener todos los propietarios
$resultado = $conexion->query("SELECT * FROM propietario");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver Propietarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Propietarios</h1>
        <a href="propietario_dashboard.php" class="btn btn-secondary mb-3">Volver al Panel</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Carnet</th>
                    <th>Nombre</th>
                    <th>Paterno</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($fila = $resultado->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $fila['carnet']; ?></td>
                    <td><?php echo $fila['nombre']; ?></td>
                    <td><?php echo $fila['paterno']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
