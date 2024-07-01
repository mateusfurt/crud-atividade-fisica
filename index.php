<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar e Listar Atividades</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Estilos personalizados -->
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Cadastrar Nova Atividade</h2>
        <form method="post" action="addAtv.php" class="needs-validation" novalidate>
            <div class="form-group">
                <label for="nome">Nome da Atividade:</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
                <div class="invalid-feedback">
                    Por favor, insira o nome da atividade.
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="series">Séries:</label>
                    <input type="number" class="form-control" id="series" name="series" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="repeticoes">Repetições:</label>
                    <input type="number" class="form-control" id="repeticoes" name="repeticoes" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="carga">Carga (kg):</label>
                    <input type="number" step="0.01" class="form-control" id="carga" name="carga" required>
                </div>
            </div>
            <div class="form-group">
                <label for="tempo_descanso">Tempo de Descanso (segundos):</label>
                <input type="number" class="form-control" id="tempo_descanso" name="tempo_descanso" required>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>

        <h2 class="mt-4">Lista de Atividades</h2>
        <div class="atividades mt-3">
            <?php include 'readAtv.php'; ?>
        </div>
    </div>

    <!-- Bootstrap JS e dependências opcionais -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
