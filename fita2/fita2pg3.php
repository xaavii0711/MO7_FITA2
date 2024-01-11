<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina3</title>
</head>
<body>
    <?php
    // Verifica si se recibieron datos mediante GET
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Obtén el valor seleccionado
        $opcionSeleccionada = $_GET["opcion_seleccionada"];

        // Imprime el resultado
        echo 'Opción seleccionada: ' . $opcionSeleccionada;
    }
    ?>
</body>
</html>