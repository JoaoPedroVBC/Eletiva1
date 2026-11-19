<?php 
require_once("conexao.php");
  if ($_SERVER['REQUEST_METHOD'] == 'POST'){ 
    if (isset($_POST['imo_id'])){
        $id = $_POST['imo_id'];

        $sql = "Delete from imoveis where imo_id = :id";

        $resultado = $con->prepare($sql);
        $resultado-> bindparam(":id", $id);
        $resultado-> execute();

        header("Location: imoveis.php");
        exit;
    }
  } ?>



<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listar Imoveis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php

$sql = "SELECT * FROM imoveis";
$resultado = $con->query($sql);
$imoveis = $resultado->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container mt-5">
    <h2>Imoveis </h2>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Tipo</th>
                <th>Bairro</th>
                <th>Rua</th>
                <th>Numero</th>
                <th>Valor</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($imoveis as $imovel) { ?>
                <tr>
                    <td><?= htmlspecialchars($imovel['imo_tipo']) ?></td>
                    <td><?= htmlspecialchars($imovel['imo_bairro']) ?></td>
                    <td><?= htmlspecialchars($imovel['imo_rua']) ?></td>
                    <td><?= htmlspecialchars($imovel['imo_num']) ?></td>
                    <td><?= htmlspecialchars($imovel['imo_valor']) ?></td>
                    <td><a href="UpImo.php?id=<?= $imovel['imo_id'] ?>" class="btn btn-warning"> Editar</a> </td>
                    <td> <form method="POST"> <input type="hidden" name="imo_id" value="<?= $imovel["imo_id"] ?>">
                    <button type="submit" class="btn btn-danger"> Excluir </button> </form> </td>



                </tr>

                


            <?php } ?>
        </tbody>
    </table>
             
            <a href="imoveis.php" class="btn btn-secondary">
                Voltar
            </a>
</div>
</body>
</html>
