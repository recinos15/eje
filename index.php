<?php
// Definir la fecha y hora actual
$fecha_actual = date("d/m/Y H:i:s");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP en Vercel</title>
</head>
<body>
    <header>
        <h1>Bienvenido a mi página PHP en Vercel</h1>
    </header>
    <section>
        <p>La fecha y la hora actual: <?php echo $fecha_actual; ?></p>
    </section> 
    <footer>
        <?php echo date("Y"); ?> Desarrollado por Roberto
    </footer>
</body>
</html>
