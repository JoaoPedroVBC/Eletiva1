
<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Menu Principal</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f5f5f5;
        }

        .card {
            border: 1px solid #ccc;
            border-radius: 10px;
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.15);
        }

        .card a {
            color: #212529;
            text-decoration: none;
        }

        .card-title {
            margin: 0;
        }
    </style>
</head>

<body>

    <div class="container py-5">

        <h1 class="text-center mb-5">Proprietarios</h1>

        <div class="row justify-content-center g-4">

            <div class="col-md-4">
                <div class="card p-4 text-center">
                    <a href="CadProp.php">
                        <h4 class="card-title">Cadastro</h4>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card p-4 text-center">
                    <a href="TodProp.php">
                        <h4 class="card-title">Todos os Proprietarios
                        </h4>
                    </a>
                </div>
            </div>
                        <div class="col-md-4">
                <div class="card p-4 text-center">
                    <a href="index.php">
                        <h4 class="card-title">Voltar</h4>
                    </a>
                </div>
            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
