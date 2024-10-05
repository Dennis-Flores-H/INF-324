<?php
session_start();
if ($_SESSION['rol'] !== 'Propietario') {
    header("Location: login.php");
    exit();
}

include('c.php');  // Conexión a la base de datos

// Consulta para obtener todos los catastros
$resultado = $conexion->query("SELECT * FROM catastro");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver Catastros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Catastros</h1>
        <a href="propietario_dashboard.php" class="btn btn-secondary mb-3">Volver al Panel</a>

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
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
