<?php 
require_once("conexao.php");
  if ($_SERVER['REQUEST_METHOD'] == 'POST'){ 
    if (isset($_POST['loc_id'])){
        $id = $_POST['loc_id'];

        $sql = "Delete from locatario where loc_id = :id";

        $resultado = $con->prepare($sql);
        $resultado-> bindparam(":id", $id);
        $resultado-> execute();

        header("Location: loc.php");
        exit;
    }
  } ?>



<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listar Locatarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php

$sql = "SELECT * FROM locatario";
$resultado = $con->query($sql);
$locatarios = $resultado->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container mt-5">
    <h2>Locatarios </h2>

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
            <?php foreach ($locatarios as $locatario) { ?>
                <tr>
                    <td><?= htmlspecialchars($locatario['loc_nome']) ?></td>
                    <td><?= htmlspecialchars($locatario['loc_cpf']) ?></td>
                    <td><?= htmlspecialchars($locatario['loc_idade']) ?></td>
                    <td><?= htmlspecialchars($locatario['loc_email']) ?></td>
                    <td><?= htmlspecialchars($locatario['loc_telefone']) ?></td>
                    <td><a href="UpLoc.php?id=<?= $locatario['loc_id'] ?>" class="btn btn-warning"> Editar</a> </td>
                    <td> <form method="POST"> <input type="hidden" name="loc_id" value="<?= $locatario["loc_id"] ?>">
                    <button type="submit" class="btn btn-danger"> Excluir </button> </form> </td>



                </tr>

                


            <?php } ?>
        </tbody>
    </table>
             
            <a href="Loc.php" class="btn btn-secondary">
                Voltar
            </a>
</div>
</body>
</html>
