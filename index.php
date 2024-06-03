<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deploy</title>
</head>
<body>
<header>
    <h1>Bienvenido</h1>
</header>
<section>
<?php

$fecha_actual = date("d/m/Y H:i:s");
echo "<p>La fecha y la hora actual: $fecha_actual</p>";

// Si estás intentando incluir un archivo PHP, asegúrate de que la ruta sea correcta y que no haya errores de sintaxis.
require __DIR__ . '/../public/index.php';

?>
</section> 
<footer>
    <?php echo date("Y"); ?> Desarrollado por Roberto
</footer>
</body>
</html>
