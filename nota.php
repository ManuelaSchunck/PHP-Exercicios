<!DOCTYPE html>
<html>
<head>
    <title>Calculadora Média</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Calculadora Média</h1>
        <form id="media-form" action="" method="POST">
            <div class="mb-3">
                <label for="nota1" class="form-label">Primeira nota:</label>
                <input type="number" id="nota1" name="nota1" step="0.1" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="nota2" class="form-label">Segunda Nota:</label>
                <input type="number" id="nota2" name="nota2" step="0.1" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="nota3" class="form-label">Terceira Nota:</label>
                <input type="number" id="nota3" name="nota3" step="0.1" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>

        <?php
        if (isset($_POST['nota1']) && isset($_POST['nota2']) && isset($_POST['nota3'])) {
            $nota1 = $_POST['nota1'];
            $nota2 = $_POST['nota2'];
            $nota3 = $_POST['nota3'];

            $media = ($nota1 + $nota2 + $nota3) / 3;

            echo "<h2>Média:</h2>";
            echo "<p>$media</p>";

            echo "<h2>Status:</h2>";
            if ($media >= 7) {
                echo "<p class='text-success'>APROVADO</p>";
            } else {
                echo "<p class='text-danger'>REPROVADO</p>";
            }
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
