<?php 
require_once("conexao.php");
  if ($_SERVER['REQUEST_METHOD'] == 'POST'){ 
    if (isset($_POST['prop_id'])){
        $id = $_POST['prop_id'];

        $sql = "Delete from proprietario where prop_id = :id";

        $resultado = $con->prepare($sql);
        $resultado-> bindparam(":id", $id);
        $resultado-> execute();

        header("Location: prop.php");
        exit;
    }
  } ?>



<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Listar Proprietario </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php

$sql = "SELECT * FROM proprietario";
$resultado = $con->query($sql);
$proprietarios = $resultado->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container mt-5">
    <h2>Proprietario </h2>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Cpf</th>
                <th>Idade</th>
                <th>Email</th>
                <th>Telefone</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($proprietarios as $proprietario) { ?>
                <tr>
                    <td><?= htmlspecialchars($proprietario['prop_nome']) ?></td>
                    <td><?= htmlspecialchars($proprietario['prop_cpf']) ?></td>
                    <td><?= htmlspecialchars($proprietario['prop_idade']) ?></td>
                    <td><?= htmlspecialchars($proprietario['prop_email']) ?></td>
                    <td><?= htmlspecialchars($proprietario['pro_telefone']) ?></td>
                    <td><a href="Upprop.php?id=<?= $proprietario['prop_id'] ?>" class="btn btn-warning"> Editar</a> </td>
                    <td> <form method="POST"> <input type="hidden" name="prop_id" value="<?= $proprietario["prop_id"] ?>">
                    <button type="submit" class="btn btn-danger"> Excluir </button> </form> </td>



                </tr>

                


            <?php } ?>
        </tbody>
    </table>
             
            <a href="prop.php" class="btn btn-secondary">
                Voltar
            </a>
</div>
</body>
</html>
