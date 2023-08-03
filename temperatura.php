<!DOCTYPE html>
<html>
<head>
    <title>Temperatura</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Temperatura em Celsius</h1>
    <form id="temperature-form" action="" method="GET">
        <label for="celsius">Digite a temperatura em Celsius:</label>
        <input type="number" id="celsius" name="celsius" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if (isset($_GET['celsius'])) {
        $celsius = $_GET['celsius'];
        if ($celsius < 0) {
            echo "<p>Temperatura: Congelante</p>";
        } elseif ($celsius >= 0 && $celsius < 15) {
            echo "<p>Temperatura: Frio</p>";
        } elseif ($celsius >= 15 && $celsius < 25) {
            echo "<p>Temperatura: Razoável</p>";
        } elseif ($celsius >= 25) {
            echo "<p>Temperatura: Calor</p>";
        }
    } else {
    }
    ?>
</body>
</html>
