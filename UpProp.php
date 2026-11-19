<?php require_once("conexao.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = $_POST['prop_id'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $idade = $_POST['idade'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $sql = "UPDATE proprietario SET 
            prop_nome = :nome,
            prop_cpf = :cpf,
            prop_idade = :idade,
            prop_email = :email,
            pro_telefone = :telefone
            WHERE prop_id = :id";

    $resultado = $con->prepare($sql);

    $resultado->bindParam(":nome", $nome);
    $resultado->bindParam(":cpf", $cpf);
    $resultado->bindParam(":idade", $idade);
    $resultado->bindParam(":email", $email);
    $resultado->bindParam(":telefone", $telefone);
    $resultado->bindParam(":id", $id);

    $resultado->execute();

    header("Location: TodProp.php");
    exit;
}



  if ($_SERVER['REQUEST_METHOD'] == 'GET'){ 
    if (isset($_GET['id'])){  

        $id = $_GET['id'];

         $sql = "SELECT * FROM proprietario WHERE prop_id = :id";

        $resultado = $con->prepare($sql);
        $resultado->bindParam(":id", $id);
        $resultado->execute();

        $proprietario = $resultado->fetch(PDO::FETCH_ASSOC);
        if (!$proprietario) {
            die("Proprietario não encontrado!"); }
    }
        else {
            die("ID não informado!");
                     }

}


   ?>




<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Atualizar Proprietario</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container py-5">

        <h1 class="text-center mb-4">Atualizar Proprietario</h1>

        <form method="post">

            <input type="hidden" name="prop_id" value="<?= $proprietario['prop_id'] ?>">

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" id="nome" name="nome" required=""
                    class="form-control" placeholder="Digite o nome"
                    value="<?= htmlspecialchars($proprietario['prop_nome'])?>">
            </div>

            <div class="mb-3">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" id="cpf" name="cpf" required=""  
                    class="form-control" placeholder="Digite o CPF"
                    value="<?= htmlspecialchars($proprietario['prop_cpf'])?>">
            </div>


            <div class="mb-3">
                <label for="idade" class="form-label">Idade</label>
                <input type="number" id="idade" name="idade" required=""
                    class="form-control" placeholder="Digite a idade"
                    value="<?= htmlspecialchars($proprietario['prop_idade'])?>">

            </div>

            <div class="mb-3">
                <label for="email" class="form-label">E-mail </label>
                <input type="text" id="email" name="email" required=""
                    class="form-control"  placeholder="Digite o E-mail"
                    value="<?= htmlspecialchars($proprietario['prop_email'])?>">
            </div>
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="tel" id="telefone" name="telefone"
                    class="form-control"
                    placeholder="(00) 00000-0000"
                    maxlength="15"
                    required=""
                    value="<?= htmlspecialchars($proprietario['pro_telefone'])?>">


            </div>

            <button type="submit" class="btn btn-primary">
                Editar
            </button>

            <a href="TodProp.php" class="btn btn-secondary">
                Voltar
            </a>

        </form>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
