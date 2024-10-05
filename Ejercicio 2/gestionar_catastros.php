<?php
session_start();
if ($_SESSION['rol'] !== 'Administrador') {
    header("Location: login.php");
    exit();
}

include('c.php');  // Conexión a la base de datos

$resultado = $conexion->query("SELECT * FROM catastro");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestionar Catastros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Gestionar Catastros</h1>
        <a href="admin_dashboard.php" class="btn btn-secondary mb-3">Volver al Panel de Administración</a>
        <a href="añadir_catastro.php" class="btn btn-primary mb-3">Añadir Catastro</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Catastro</th>
                    <th>Zona</th>
                    <th>X_inicial</th>
                    <th>Y_inicial</th>
                    <th>X_final</th>
                    <th>Y_final</th>
                    <th>Superficie</th>
                    <th>Distrito</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($fila = $resultado->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $fila['id_catastro']; ?></td>
                    <td><?php echo $fila['zona']; ?></td>
                    <td><?php echo $fila['X_inicial']; ?></td>
                    <td><?php echo $fila['Y_inicial']; ?></td>
                    <td><?php echo $fila['X_final']; ?></td>
                    <td><?php echo $fila['Y_final']; ?></td>
                    <td><?php echo $fila['superficie']; ?></td>
                    <td><?php echo $fila['distrito']; ?></td>
                    <td>
                        <a href="editar_catastro.php?id_catastro=<?php echo $fila['id_catastro']; ?>" class="btn btn-warning">Editar</a>
                        <a href="eliminar_catastro.php?id_catastro=<?php echo $fila['id_catastro']; ?>" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este catastro?')">Eliminar</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
