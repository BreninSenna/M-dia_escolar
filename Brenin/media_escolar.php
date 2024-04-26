
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média Escolar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 500px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #333;
        }

        input[type="text"],
        input[type="date"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .results {
            max-width: 500px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .results h2 {
            color: #333;
        }

        .results p {
            margin-bottom: 10px;
            color: #333;
        }

        .results p:last-child {
            margin-bottom: 0;
        }

        .results p.situacao {
            font-weight: bold;
        }

        .situacao.aprovado {
            color: green;
        }

        .situacao.reprovado {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Cálculo da Média Escolar</h1>
    <form method="post" action="">
        <label for="ra">RA:</label>
        <input type="text" id="ra" name="ra" required><br><br>

        <label for="nome">Nome do Aluno:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" id="data_nascimento" name="data_nascimento" required><br><br>

        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" required><br><br>

        <label for="grau">Grau:</label>
        <input type="text" id="grau" name="grau" required><br><br>

        <label for="media">Média:</label>
        <input type="text" id="media" name="media" required><br><br>

        <label for="faltas1">Faltas1:</label>
        <input type="text" id="faltas1" name="faltas1" required><br><br>   

        <label for="faltas2">Faltas2:</label>
        <input type="text" id="faltas2" name="faltas2" required><br><br>   

        <input type="submit" name="submit" value="Calcular Média">
    </form>

    <?php
    if(isset($_POST['submit'])) {
        // Recuperando os valores do formulário
        $ra = $_POST['ra'];
        $nome = $_POST['nome'];
        $data_nascimento = $_POST['data_nascimento'];
        $cpf = $_POST['cpf'];
        $grau = $_POST['grau'];
        $media = $_POST['media'];
        $faltas1 = $_POST['faltas1'];
        $faltas2 = $_POST['faltas2'];
        $totalfaltas = $faltas1 + $faltas2;
        // Exibindo os resultados
        echo "<h2>Resultados:</h2>";
        echo "<p>RA: $ra</p>";
        echo "<p>Nome do Aluno: $nome</p>";
        echo "<p>Data de Nascimento: $data_nascimento</p>";
        echo "<p>CPF: $cpf</p>";
        echo "<p>Grau: $grau</p>";
        echo "<p>Média: $media</p>";
        echo "<p>Faltas1: $faltas1</p>";
        echo "<p>Faltas2: $faltas2</p>";
        echo "Total faltas:" . $totalfaltas ;  
        if ($media >= 6 && $faltas1 <= 10 && $faltas2 <= 10) {
            echo "<p>Situação: Aprovado</p>";
        } else {
            echo "<p>Situação: Reprovado</p>";
        }
    }
    ?>
</body>
</html>

</body>
</html>