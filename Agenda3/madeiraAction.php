<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <title>Resultado</title>
</head>

<body>

    <div class="w3-container w3-brown">

        <h1>

<?php

$nome = $_POST['txtNome'];

$valorCompra = $_POST['txtValorCompra'];

$formaPagamento = $_POST['cmbPag'];

$desconto = 0;


// Depósito
if($formaPagamento == "deposito")
{
    $desconto = $valorCompra * 10 / 100;

    $valorFinal = $valorCompra - $desconto;

    echo "Olá ".$nome."! <br>";

    echo "Valor da compra: R$ ".number_format($valorCompra, 2, ",", ".")."<br>";

    echo "Forma de pagamento: Depósito<br>";

    echo "Desconto: R$ ".number_format($desconto, 2, ",", ".")."<br>";

    echo "Valor final: R$ ".number_format($valorFinal, 2, ",", ".")."<br>";
}


// Boleto
elseif($formaPagamento == "boleto")
{
    $desconto = $valorCompra * 8 / 100;

    $valorFinal = $valorCompra - $desconto;

    echo "Olá ".$nome."! <br>";

    echo "Valor da compra: R$ ".number_format($valorCompra, 2, ",", ".")."<br>";

    echo "Forma de pagamento: Boleto<br>";

    echo "Desconto: R$ ".number_format($desconto, 2, ",", ".")."<br>";

    echo "Valor final: R$ ".number_format($valorFinal, 2, ",", ".")."<br>";
}


// Cartão de crédito
elseif($formaPagamento == "cartaoCredito")
{
    $desconto = 0;

    $valorFinal = $valorCompra;

    echo "Olá ".$nome."! <br>";

    echo "Valor da compra: R$ ".number_format($valorCompra, 2, ",", ".")."<br>";

    echo "Forma de pagamento: Cartão de crédito<br>";

    echo "Desconto: R$ ".number_format($desconto, 2, ",", ".")."<br>";

    echo "Valor final: R$ ".number_format($valorFinal, 2, ",", ".")."<br>";
}

else
{
    echo "Forma de pagamento inválida.";
}

?>

        </h1>

    </div>

</body>

</html>


<!--

COMENTÁRIO REFLEXIVO

Primeiramente analisei o código que recebi na atividade
e verifiquei as condições utilizadas para cada forma de pagamento.

Encontrei dois erros nos valores dos descontos. O boleto
estava utilizando 10%, mas o desconto correto é 8%.
O depósito estava utilizando 8%, mas o desconto correto
é 10%.

Para calcular o desconto utilizei:
valor da compra * porcentagem / 100

Depois calculei o valor final utilizando:
valor da compra - desconto
utilizei o método POST para enviar os dados para o arquivo
madeiraAction.php.

No arquivo de ação, os valores enviados pelo formulário
são recebidos utilizando $_POST e armazenados em
variáveis.

Por fim, utilizei echo para mostrar o nome do cliente,
valor da compra, forma de pagamento, desconto e valor
final da compra.

-->
