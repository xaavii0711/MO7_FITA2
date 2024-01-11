<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina2</title>
</head>
<body>
    <?php
    // Verifica si se recibieron datos mediante POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtén el valor del campo de entrada único
        $cajaUnica = $_POST["caja_unica"];

        // Convierte los saltos de línea en un array
        $valores = explode("\n", $cajaUnica);

        // Imprime el formulario de selección
        echo '<form action="fita2pg3.php" method="GET">';
        echo '<select name="opcion_seleccionada">';
        
        // Itera sobre los valores y crea opciones para el select
        foreach ($valores as $valor) {
            echo '<option value="' . trim($valor) . '">' . trim($valor) . '</option>';
        }
        
        echo '</select>';
        echo '<br>';
        echo '<input type="submit" value="Enviar">';
        echo '</form>';
    }
    ?>
</body>
</html>
