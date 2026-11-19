
<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cadastro de Proprietários</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container py-5">

        <h1 class="text-center mb-4">Cadastro de Locatario</h1>

        <form method="post">

            <div class="mb-3">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" id="cpf" name="cpf"
                    class="form-control"w
                    placeholder="Digite o CPF"
                    maxlength="14"
                    required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email"
                    class="form-control"
                    placeholder="exemplo@email.com"
                    required>
            </div>

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" id="nome" name="nome"
                    class="form-control"
                    placeholder="Digite o nome completo"
                    required>
            </div>

            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="tel" id="telefone" name="telefone"
                    class="form-control"
                    placeholder="(00) 00000-0000"
                    maxlength="15"
                    required>
            </div>

            <div class="mb-3">
                <label for="idade" class="form-label">Idade</label>
                <input type="number" id="idade" name="idade"
                    class="form-control"
                    placeholder="Digite sua idade"
                    min="18"
                    max="120"
                    required>
            </div>

            <button type="submit" class="btn btn-primary">
                Enviar
            </button>

            <a href="loc.php" class="btn btn-secondary">
                Voltar
            </a>

        </form>

                            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $cpf = $_POST['cpf'];
                    $email = $_POST['email'];
                    $nome = $_POST['nome'];
                    $telefone = $_POST['telefone'];
                    $idade = $_POST['idade'];
                    require_once("conexao.php");
                    $sql = "INSERT INTO locatario (loc_cpf, loc_email, loc_nome, loc_telefone, loc_idade) VALUES (:cpf, :email, :nome, :telefone, :idade)";
                    $resultado = $con->prepare($sql);
                    $resultado->bindParam(":cpf", $cpf);
                    $resultado->bindParam(":email", $email);
                    $resultado->bindParam(":nome", $nome);
                    $resultado->bindParam(":telefone", $telefone);
                    $resultado->bindParam(":idade", $idade);
                    if($resultado->execute())
                        echo "<p>Inserido com sucesso!</p>";
                    else   
                        echo "<p>Erro ao inserir!</p>";

                }
            ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
