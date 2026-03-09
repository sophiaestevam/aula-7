<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de massa corporea</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>Calculadora de Índice de Massa Corpórea</h1>
                <form action="receberDados.php" method="POST">
                    <div class="mb-3">
                        <label for="campoimc" class="form-label">Peso:</label>
                        <input type="number" step="any" class="form-control" id="campoNome" placeholder="Seu Peso" name="txtpeso">
                    </div>
                    <div class="mb-3">
                        <label for="campoEmail" class="form-label">altura(Em metros):</label>
                        <input type="number" step="any" class="form-control" id="campoEmail" placeholder="Sua altura" name="txtaltura">
                    </div>

                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-warning">Limpar campos</button>
                </form>
            </div>

            <div class="col-4">
                <h1> Sistema de Faturamento de Locadora de Veículos</h1>
                <form action="ReceberDados2.php" method="POST">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault1">
                        <label class="form-check-label" for="radioDefault1">
                            Popular
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault2" checked>
                        <label class="form-check-label" for="radioDefault2">
                            Luxo
                        </label>
                        <div class="mb-3">
                            <label for="campoimc" class="form-label">Carros populares:</label>
                            <input type="number" step="any" class="form-control" id="campoNome" placeholder="" name="txtcpopular">
                        </div>
                        <div class="mb-3">
                            <label for="campoEmail" class="form-label">Carros de luxo:</label>
                            <input type="number" step="any" class="form-control" id="campoEmail" placeholder="" name="txtcluxo">
                        </div>

                        <button type="submit" class="btn btn-success">enviar</button>
                        <button type="reset" class="btn btn-warning">Limpar campos</button>
                </form>
            </div>

        </div>
    </div>
    </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>