<?php
$peso = $_POST['txtpeso'];
$altura = $_POST['txtaltura'];
$calc = 0;

$estado = "";
$calc = $peso / ($altura * $altura);
if ($calc <= 18.5) {
    $estado = "Abaixo do Peso";
} else if ($calc >= 18.5 && $calc <= 25) {
    $estado = "Peso ideal";
} else if ($calc >= 25 && $calc <= 30) {
    $estado = "Sobrepeso";
} else if ($calc >= 30 && $calc <= 40) {
    $estado = "Obesiadade";
} else {
    $estado = "Obesidade Mórbida";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="card">
        <div class="card-header">
            Calculadora de Índice de Massa Corpórea
        </div>
        <div class="card-body">
            <figure>
                <blockquote class="blockquote">
                    <p><?php echo "O imc é $calc, $estado"; ?></p>
                </blockquote>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>