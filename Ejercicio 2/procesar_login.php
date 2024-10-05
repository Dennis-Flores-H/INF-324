<?php
include('c.php');  // Conexión a la base de datos
session_start();

if (isset($_POST['usuario']) && isset($_POST['pass'])) {
    $usuario = mysqli_real_escape_string($conexion, $_POST['usuario']);
    $pass = mysqli_real_escape_string($conexion, $_POST['pass']);

    // Consulta para verificar el usuario y el rol
    $stmt = $conexion->prepare("SELECT usuario, rol FROM usuario WHERE usuario = ? AND contraseña = ?");
    $stmt->bind_param('ss', $usuario, $pass);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($usuario, $rol);
        $stmt->fetch();

        $_SESSION['usuario'] = $usuario;
        $_SESSION['rol'] = $rol;

        if ($rol === 'Administrador') {
            header("Location: admin_dashboard.php");
        } else {
            header("Location: propietario_dashboard.php");
        }
        exit();
    } else {
        echo '
        <script>
            alert("Usuario o contraseña incorrectos");
            window.location.href = "login.php";
        </script>';
    }

    $stmt->close();
}
?>
