<?php
include 'db_config.php'; // Certifique-se de que db_config.php contenha a conexão com o banco de dados

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
        header('Location: index.php'); // Correção: 'Location: index.php' deve ser uma string entre aspas simples
        exit(); // Importante usar exit() após header('Location') para garantir que o script pare de executar imediatamente
    } else {
        echo "Erro ao registrar atividade: " . $conn->error;
    }

    $conn->close();
}
?>
