<?php include('cabecera.php'); ?>
<main>
    <h1>Contacto</h1>
    <p>Si tienes alguna pregunta, no dudes en contactarnos a través del siguiente formulario:</p>
    <form action="procesar_contacto.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required>
        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" required></textarea>
        <button type="submit">Enviar</button>
    </form>
</main>
<?php include('pie.php'); ?>
