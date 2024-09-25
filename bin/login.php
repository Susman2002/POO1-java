<?php include('cabecera.php'); ?>
<main>
    <h1>Iniciar Sesión</h1>
    <form action="procesar_login.php" method="POST">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Iniciar Sesión</button>
    </form>
</main>
<?php include('pie.php'); ?>
