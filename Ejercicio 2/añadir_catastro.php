<?php
session_start();
if ($_SESSION['rol'] !== 'Administrador') {
    header("Location: login.php");
    exit();
}

include('c.php');  // Conexión a la base de datos

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_catastro = $_POST['id_catastro'];
    $zona = $_POST['zona'];
    $X_inicial = $_POST['X_inicial'];
    $Y_inicial = $_POST['Y_inicial'];
    $X_final = $_POST['X_final'];
    $Y_final = $_POST['Y_final'];
    $superficie = $_POST['superficie'];
    $distrito = $_POST['distrito'];

    $stmt = $conexion->prepare("INSERT INTO catastro (id_catastro, zona, X_inicial, Y_inicial, X_final, Y_final, superficie, distrito) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param('isssssss', $id_catastro, $zona, $X_inicial, $Y_inicial, $X_final, $Y_final, $superficie, $distrito);

    if ($stmt->execute()) {
        header("Location: gestionar_catastros.php");
        exit();
    } else {
        echo "Error al añadir catastro.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Añadir Catastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Añadir Catastro</h1>
        <a href="gestionar_catastros.php" class="btn btn-secondary mb-3">Volver</a>

        <form action="añadir_catastro.php" method="POST">
            <div class="mb-3">
                <label for="id_catastro" class="form-label">ID Catastro</label>
                <input type="number" class="form-control" id="id_catastro" name="id_catastro" required>
            </div>
            <div class="mb-3">
                <label for="zona" class="form-label">Zona</label>
                <input type="text" class="form-control" id="zona" name="zona" required>
            </div>
            <div class="mb-3">
                <label for="X_inicial" class="form-label">X Inicial</label>
                <input type="text" class="form-control" id="X_inicial" name="X_inicial" required>
            </div>
            <div class="mb-3">
                <label for="Y_inicial" class="form-label">Y Inicial</label>
                <input type="text" class="form-control" id="Y_inicial" name="Y_inicial" required>
            </div>
            <div class="mb-3">
                <label for="X_final" class="form-label">X Final</label>
                <input type="text" class="form-control" id="X_final" name="X_final" required>
            </div>
            <div class="mb-3">
                <label for="Y_final" class="form-label">Y Final</label>
                <input type="text" class="form-control" id="Y_final" name="Y_final" required>
            </div>
            <div class="mb-3">
                <label for="superficie" class="form-label">Superficie</label>
                <input type="text" class="form-control" id="superficie" name="superficie" required>
            </div>
            <div class="mb-3">
                <label for="distrito" class="form-label">Distrito</label>
                <input type="text" class="form-control" id="distrito" name="distrito" required>
            </div>
            <button type="submit" class="btn btn-primary">Añadir Catastro</button>
        </form>
    </div>
</body>
</html>
