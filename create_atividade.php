<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $series = $_POST["series"];
    $repeticoes = $_POST["repeticoes"];
    $carga = $_POST["carga"];
    $tempo_descanso = $_POST["tempo_descanso"];

    $sql = "INSERT INTO Atividades (nome, series, repeticoes, carga, tempo_descanso)
            VALUES ('$nome', $series, $repeticoes, $carga, $tempo_descanso)";

    if ($conn->query($sql) === TRUE) {
        echo "Nova atividade registrada com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Atividade</title>
</head>
<body>
    <h2>Cadastrar Nova Atividade</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Nome da Atividade: <input type="text" name="nome" required><br><br>
        Séries: <input type="number" name="series" required><br><br>
        Repetições: <input type="number" name="repeticoes" required><br><br>
        Carga (kg): <input type="number" step="0.01" name="carga" required><br><br>
        Tempo de Descanso (segundos): <input type="number" name="tempo_descanso" required><br><br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
