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
?>
</section> 
<footer>
    <?php echo date("Y"); ?> Desarrollado por Roberto
</footer>
</body>
</html>
