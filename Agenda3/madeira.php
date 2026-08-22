<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <title>Madeira e Cia</title>
</head>

<body>

    <div class="w3-container w3-brown">
        <h2>Madeira e Cia - Promoção de Aniversário</h2>
    </div>

    <form class="w3-container" method="post" action="madeiraAction.php">

        <label class="w3-text-brown">
            <b>Nome do Cliente</b>
        </label>

        <input
            class="w3-input w3-border w3-light-grey"
            name="txtNome"
            type="text"
        >

        <label class="w3-text-brown">
            <b>Valor da Compra</b>
        </label>

        <input
            class="w3-input w3-border w3-light-grey"
            name="txtValorCompra"
            type="number"
        >

        <label class="w3-text-brown">
            <b>Forma de Pagamento</b>
        </label>

        <select
            class="w3-input w3-border w3-light-grey"
            name="cmbPag"
        >

            <option value="deposito">
                Depósito
            </option>

            <option value="boleto">
                Boleto
            </option>

            <option value="cartaoCredito">
                Cartão de crédito
            </option>

        </select>

        <br>

        <button class="w3-btn w3-brown">
            Calcular
        </button>

    </form>

</body>

</html>