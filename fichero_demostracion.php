<?php
$fechaActual = date('d/m/Y'); 
$horaActual = date('H:i:s');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demostracion Fichero PHP</title>

</head>

<body>

<header>
    <h1>Demostracion Fichero PHP</h1>

    <p>Fecha actual: <?php echo htmlspecialchars($fechaActual); ?></p>
    <p>Hora actual: <?php echo htmlspecialchars($horaActual); ?></p>

</body>
</html>