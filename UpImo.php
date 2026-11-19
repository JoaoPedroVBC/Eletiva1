<?php require_once("conexao.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = $_POST['imo_id'];
    $bairro = $_POST['bairro'];
    $rua = $_POST['rua'];
    $imovel = $_POST['imovel'];
    $numero = $_POST['numero'];
    $valor = $_POST['valor'];

    $sql = "UPDATE imoveis SET 
            imo_bairro = :bairro,
            imo_rua = :rua,
            imo_tipo = :imovel,
            imo_num = :numero,
            imo_valor = :valor
            WHERE imo_id = :id";

    $resultado = $con->prepare($sql);

    $resultado->bindParam(":bairro", $bairro);
    $resultado->bindParam(":rua", $rua);
    $resultado->bindParam(":imovel", $imovel);
    $resultado->bindParam(":numero", $numero);
    $resultado->bindParam(":valor", $valor);
    $resultado->bindParam(":id", $id);

    $resultado->execute();

    header("Location: TodImo.php");
    exit;
}



  if ($_SERVER['REQUEST_METHOD'] == 'GET'){ 
    if (isset($_GET['id'])){  

        $id = $_GET['id'];

         $sql = "SELECT * FROM imoveis WHERE imo_id = :id";

        $resultado = $con->prepare($sql);
        $resultado->bindParam(":id", $id);
        $resultado->execute();

        $imovel = $resultado->fetch(PDO::FETCH_ASSOC);
        if (!$imovel) {
            die("Imóvel não encontrado!"); }
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

    <title>Cadastro de Imóveis</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container py-5">

        <h1 class="text-center mb-4">Atualizar Imóveis</h1>

        <form method="post">

            <input type="hidden" name="imo_id" value="<?= $imovel['imo_id'] ?>">

            <div class="mb-3">
                <label for="bairro" class="form-label">Bairro</label>
                <input type="text" id="bairro" name="bairro" required=""
                    class="form-control" placeholder="Digite o bairro"
                    value="<?= htmlspecialchars($imovel['imo_bairro'])?>">
            </div>

            <div class="mb-3">
                <label for="rua" class="form-label">Rua</label>
                <input type="text" id="rua" name="rua" required=""  
                    class="form-control" placeholder="Digite a rua"
                    value="<?= htmlspecialchars($imovel['imo_rua'])?>">
            </div>

            <div class="mb-3">
                <label for="imovel" class="form-label">Tipo de imóvel</label>
                    <select name="imovel" id="imovel" class="form-select" required="">
                        <option value="casa" <?= $imovel['imo_tipo'] == 'casa' ? 'selected' : '' ?>>
                            Casa
                        </option>
                        <option value="apartamento" <?= $imovel['imo_tipo'] == 'apartamento' ? 'selected' : '' ?>>
                            Apartamento
                        </option>
                    </select>
            </div>

            <div class="mb-3">
                <label for="numero" class="form-label">Número</label>
                <input type="number" id="numero" name="numero" required=""
                    class="form-control" placeholder="Digite o número"
                    value="<?= htmlspecialchars($imovel['imo_num'])?>">

            </div>

            <div class="mb-3">
                <label for="valor" class="form-label">Valor (R$)</label>
                <input type="number" id="valor" name="valor" required=""
                    class="form-control" step="0.01" min="0"
                    placeholder="Ex: 250000.50"
                    value="<?= htmlspecialchars($imovel['imo_valor'])?>">

            </div>

            <button type="submit" class="btn btn-primary">
                Editar
            </button>

            <a href="TodImo.php" class="btn btn-secondary">
                Voltar
            </a>

        </form>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
