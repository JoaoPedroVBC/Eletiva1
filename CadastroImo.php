
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

        <h1 class="text-center mb-4">Cadastro de Imóveis</h1>

        <form method="post">

            <!-- BAIRRO -->
            <div class="mb-3">
                <label for="bairro" class="form-label">Bairro</label>
                <input type="text" id="bairro" name="bairro" required=""
                    class="form-control" placeholder="Digite o bairro">
            </div>

            <!-- RUA -->
            <div class="mb-3">
                <label for="rua" class="form-label">Rua</label>
                <input type="text" id="rua" name="rua" required=""  
                    class="form-control" placeholder="Digite a rua">
            </div>

            <div class="mb-3">
                <label for="imovel" class="form-label">Tipo de imóvel</label>

                <select name="imovel" id="imovel" class="form-select" required="">
                    <option value="casa">Casa</option>
                    <option value="apartamento">Apartamento</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="numero" class="form-label">Número</label>
                <input type="number" id="numero" name="numero" required=""
                    class="form-control" placeholder="Digite o número">
            </div>

            <div class="mb-3">
                <label for="valor" class="form-label">Valor (R$)</label>
                <input type="number" id="valor" name="valor" required=""
                    class="form-control" step="0.01" min="0"
                    placeholder="Ex: 250000.50">
            </div>

            <button type="submit" class="btn btn-primary">
                Enviar
            </button>

            <a href="imoveis.php" class="btn btn-secondary">
                Voltar
            </a>

        </form>

                    <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $bairro = $_POST['bairro'];
                    $rua = $_POST['rua'];
                    $imovel = $_POST['imovel'];
                    $numero = $_POST['numero'];
                    $valor = $_POST['valor'];
                    require_once("conexao.php");
                    $sql = "INSERT INTO imoveis (imo_bairro, imo_rua, imo_tipo, imo_num, imo_valor) VALUES (:bairro, :rua, :imovel, :numero, :valor)";
                    $resultado = $con->prepare($sql);
                    $resultado->bindParam(":bairro", $bairro);
                    $resultado->bindParam(":rua", $rua);
                    $resultado->bindParam(":imovel", $imovel);
                    $resultado->bindParam(":numero", $numero);
                    $resultado->bindParam(":valor", $valor);
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
