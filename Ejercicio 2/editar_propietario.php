<?php
session_start();
if ($_SESSION['rol'] !== 'Administrador') {
    header("Location: login.php");
    exit();
}

include('c.php');  // Conexión a la base de datos

if (isset($_GET['carnet'])) {
    $carnet = $_GET['carnet'];

    // Obtener datos del propietario
    $resultado = $conexion->query("SELECT * FROM propietario WHERE carnet = $carnet");
    $propietario = $resultado->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $carnet = $_POST['carnet'];
    $nombre = $_POST['nombre'];
    $paterno = $_POST['paterno'];

    $stmt = $conexion->prepare("UPDATE propietario SET nombre = ?, paterno = ? WHERE carnet = ?");
    $stmt->bind_param('ssi', $nombre, $paterno, $carnet);

    if ($stmt->execute()) {
        header("Location: gestionar_propietarios.php");
        exit();
    } else {
        echo "Error al actualizar propietario.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Propietario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Editar Propietario</h1>
        <a href="gestionar_propietarios.php" class="btn btn-secondary mb-3">Volver</a>

        <form action="editar_propietario.php" method="POST">
            <div class="mb-3">
                <label for="carnet" class="form-label">Carnet</label>
                <input type="number" class="form-control" id="carnet" name="carnet" value="<?php echo $propietario['carnet']; ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $propietario['nombre']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="paterno" class="form-label">Apellido Paterno</label>
                <input type="text" class="form-control" id="paterno" name="paterno" value="<?php echo $propietario['paterno']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
    </div>
</body>
</html>
