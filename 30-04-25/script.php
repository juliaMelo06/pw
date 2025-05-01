<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['nomeCliente'];
    $primeiroProduto = $_POST['produto1'];
    $valor1 = $_POST['valor1'];
    $segundoProduto = $_POST['produto2'];
    $valor2 = $_POST['valor2'];
    $valorPago = $_POST['valorPago'];

    $valor1 = floatval($valor1);
    $valor2 = floatval($valor2);
    $valorPago = floatval($valorPago);

    $totalGasto = $valor1 + $valor2;
    $troco = $valorPago - $totalGasto;
    ?>

    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="style.css" />
        <title>Nota Fiscal</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 20px;
            }

            .nota-fiscal {
                background-color: #ffffff;
                border-radius: 8px;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                padding: 20px;
                max-width: 600px;
                margin: 0 auto;
            }

            h1 {
                text-align: center;
                color: #053d18;
            }

            .item {
                margin-bottom: 10px;
            }

            .valor {
                font-weight: bold;
                color: #074e2e;
            }

            .total {
                font-size: 1.2em;
                font-weight: bold;
                color: #074e2e;
                margin-top: 20px;
            }

            .troco {
                font-size: 1.2em;
                font-weight: bold;
                color: #d9534f;
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
        <div class="nota-fiscal">
            <h1>Nota Fiscal</h1>
            <div class="item">Nome: <span><?php echo htmlspecialchars($name); ?></span></div>
            <div class="item">Produto 1: <span><?php echo htmlspecialchars($primeiroProduto); ?></span> - Valor: <span class="valor">R$ <?php echo number_format($valor1, 2, ',', '.'); ?></span></div>
            <div class="item">Produto 2: <span><?php echo htmlspecialchars($segundoProduto); ?></span> - Valor: <span class="valor">R$ <?php echo number_format($valor2, 2, ',', '.'); ?></span></div>
            <div class="total">Total Gasto: <span class="valor">R$ <?php echo number_format($totalGasto, 2, ',', '.'); ?></span></div>
            <div class="item">Valor Pago: <span class="valor">R$ <?php echo number_format($valorPago, 2, ',', '.'); ?></span></div>
            <div class="troco">Troco: <span class="valor">R$ <?php echo number_format($troco, 2, ',', '.'); ?></span></div>
        </div>
    </body>
    </html>

    <?php
} else {
    echo "Por favor, envie os dados do formulário.";
}
?>