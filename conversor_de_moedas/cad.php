<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas V1.0</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    
        <header>
            <h1>
                Conversor de moedas V1.0
            </h1>
        </header>

        <main>

            <?php 
                    // Variáveis para obter os valores
                     $valor = $_REQUEST["dinheiro"] ?? 0;
                     $valordolar = $_REQUEST["dinheiro"] / "5.26";

                     // Formatação global
                     $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

                     // Exibir os resultados
                    echo "O valor <strong>" . numfmt_format_currency($padrão, $valor, "BRL")  . "</strong> reais equivale a: <strong>" . numfmt_format_currency($padrão, $valordolar, "USD") . "</strong> dólares";

                    // Cotação do dólar
                    echo "<h5> A cotação atual do dólar hoje é: <strong> R$5,26 </h5> </strong>";

            ?>
                
           <p><a href="javascript:history.go(-1)">Voltar para a página inicial</a></p>

        </main>


</body>
</html>