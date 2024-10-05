<?php
session_start();
if ($_SESSION['rol'] !== 'Administrador') {
    header("Location: login.php");
    exit();
}

include('c.php');  // Conexión a la base de datos

$resultado = $conexion->query("SELECT * FROM propietario");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestionar Propietarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Gestionar Propietarios</h1>
        <a href="admin_dashboard.php" class="btn btn-secondary mb-3">Volver al Panel de Administración</a>
        <a href="añadir_propietario.php" class="btn btn-primary mb-3">Añadir Propietario</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Carnet</th>
                    <th>Nombre</th>
                    <th>Paterno</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($fila = $resultado->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $fila['carnet']; ?></td>
                    <td><?php echo $fila['nombre']; ?></td>
                    <td><?php echo $fila['paterno']; ?></td>
                    <td>
                        <a href="editar_propietario.php?carnet=<?php echo $fila['carnet']; ?>" class="btn btn-warning">Editar</a>
                        <a href="eliminar_propietario.php?carnet=<?php echo $fila['carnet']; ?>" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este propietario?')">Eliminar</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
