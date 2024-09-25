<?php
// Datos de ejemplo (esto normalmente se almacenaría en una base de datos)
$usuario_valido = "admin";
$contraseña_valida = "123456";

// Obtener los datos del formulario
$usuario = $_POST['usuario'];
$contraseña = $_POST['password'];

// Verificar las credenciales
if ($usuario === $usuario_valido && $contraseña === $contraseña_valida) {
    // Si son válidas, redirigir al inventario
    header("Location: inventario.php");
    exit();
} else {
    // Si son incorrectas, redirigir de vuelta al login con un mensaje de error
    echo "<script>
            alert('Usuario o contraseña incorrectos. Inténtalo nuevamente.');
            window.location.href='login.php';
          </script>";
}
?>
