<?php
include 'db_config.php'; // Certifique-se de que db_config.php contenha a conexão com o banco de dados

$sql_select = "SELECT * FROM Atividades";
$result = $conn->query($sql_select);

$atividades = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $atividades[] = $row;
    }
}

$conn->close();
?>

<?php foreach ($atividades as $atividade): ?>
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title"><?php echo $atividade['nome']; ?></h5>
            <p class="card-text"><strong>Séries:</strong> <?php echo $atividade['series']; ?></p>
            <p class="card-text"><strong>Repetições:</strong> <?php echo $atividade['repeticoes']; ?></p>
            <p class="card-text"><strong>Carga:</strong> <?php echo $atividade['carga']; ?> kg</p>
            <p class="card-text"><strong>Tempo de Descanso:</strong> <?php echo $atividade['tempo_descanso']; ?> segundos</p>
        </div>
    </div>
<?php endforeach; ?>
