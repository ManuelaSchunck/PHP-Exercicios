</head>
<body>
    
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Exercicios de PHP</a>
  </div>
</nav>

<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="index.php">Exercicios 1</a>
    </li>
    <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="exercicio2.php">Exercicios 2</a>
    </li>
 </ul>
 <div class="container">
    <div class="row">
      
      <?php
        echo "<h3> Resultado </h3>";
        $aluno = $_POST['nome'];
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];

        $media = ($nota1+$nota2+$nota3) / 3;

        if ($media >= 7){

          echo "Aluno Aprovado <br>";
          echo "A Médiá: $media";

        }
        else {

          echo "Aluno Reprovado!";

        }

      ?>

   </div>
</div>

    
</body>
</html>
