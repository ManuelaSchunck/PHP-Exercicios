<!DOCTYPE html>
<html>
<head>
    <title>Calculadora IMC</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .result {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Calculadora IMC</h1>
        <form id="imc-form" action="" method="POST">
            <div class="mb-3">
                <label for="peso" class="form-label">Peso em kg:</label>
                <input type="number" id="peso" name="peso" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="altura" class="form-label">Altura em metros:</label>
                <input type="number" id="altura" name="altura" step="0.01" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>

        <?php
        if (isset($_POST['peso']) && isset($_POST['altura'])) {
            $peso = $_POST['peso'];
            $altura = $_POST['altura'];

            $imc = $peso / ($altura * $altura);
            $classificacao = "";

            if ($imc < 18.5) {
                $classificacao = "Abaixo do peso normal";
            } elseif ($imc >= 18.5 && $imc <= 24.9) {
                $classificacao = "Peso normal";
            } elseif ($imc >= 25.0 && $imc <= 29.9) {
                $classificacao = "Excesso de peso";
            } elseif ($imc >= 30.0 && $imc <= 34.9) {
                $classificacao = "Obesidade classe 1";
            } elseif ($imc >= 35.0 && $imc <= 39.9) {
                $classificacao = "Obesidade classe 2";
            } else {
                $classificacao = "Obesidade classe 3";
            }
            echo "<div class='result alert alert-primary'>$imc - $classificacao</div>";
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
