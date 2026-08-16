<?php

    $nome        = htmlspecialchars($_POST['campo1nome']);
    $idade       = htmlspecialchars($_POST['campo2idade']);
    $profissao   = htmlspecialchars($_POST['campo3profissao']);
    $salario     = htmlspecialchars($_POST['campo4salario']);
    $experiencia = htmlspecialchars($_POST['campo5experiencia']);
 
    $salarioFormatado = "R$ " . number_format((float)$salario, 2, ',', '.');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação de Cadastro</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 40px 20px;
            font-family: 'Georgia', 'Times New Roman', serif;
            background-color: #FFFFF0;
            color: #3E2723;
            display: flex;
            justify-content: center;
        }

        .container {
            width: 100%;
            max-width: 560px;
            background-color: #FFFDF5;
            border: 1px solid #D4AF37;
            border-radius: 10px;
            padding: 40px 44px 48px;
            box-shadow: 0 4px 18px rgba(112, 84, 32, 0.15);
        }

        h1 {
            text-align: center;
            font-size: 24px;
            color: #6B4226;
            margin: 0 0 20px;
            padding-bottom: 20px;
            border-bottom: 2px solid #D4AF37;
            letter-spacing: 0.5px;
        }

        ul {
            list-style: none;
            margin: 0 0 24px;
            padding: 0;
        }

        li {
            padding: 10px 0;
            border-bottom: 1px solid #EAE0C8;
            font-size: 14px;
            color: #3E2723;
        }

        li:last-child {
            border-bottom: none;
        }

        li strong,
        li::before {
            font-weight: bold;
            color: #6B4226;
        }

        p {
            font-size: 14px;
            line-height: 1.7;
            color: #3E2723;
            margin: 0 0 18px;
        }

        p:first-of-type {
            background-color: #FFF8E1;
            border: 1px solid #E8D18A;
            border-radius: 6px;
            padding: 16px 18px;
        }

        a {
            display: inline-block;
            margin-top: 8px;
            padding: 11px 22px;
            font-family: 'Georgia', serif;
            font-size: 14px;
            font-weight: bold;
            letter-spacing: 0.3px;
            color: #FFFDF5;
            background: linear-gradient(180deg, #C9A227 0%, #A67C3D 100%);
            border: 1px solid #8C6A2C;
            border-radius: 6px;
            text-decoration: none;
            text-align: center;
            transition: opacity 0.2s ease;
        }

        a:hover {
            opacity: 0.92;
        }

        @media (max-width: 480px) {
            .container {
                padding: 28px 22px 34px;
            }
        }
    </style>
</head>
<body>

<div class="container">

    <h1>Cadastro Realizado com Sucesso</h1>

    <ul>
        <li><strong>Nome:</strong> <?php echo $nome; ?></li>
        <li><strong>Idade:</strong> <?php echo $idade; ?> anos</li>
        <li><strong>Profissão:</strong> <?php echo $profissao; ?></li>
        <li><strong>Salário pretendido:</strong> <?php echo $salarioFormatado; ?></li>
        <li><strong>Experiência anterior:</strong> <?php echo nl2br($experiencia); ?></li>
    </ul>

    <p>
        Olá, <?php echo $nome; ?>! Seu cadastro para a profissão de <?php echo $profissao; ?>
        foi recebido com sucesso pelas Lojas Brincos e Companhia.
        <?php
                echo "Ficamos contentes em saber sobre sua experiência: \"" . $experiencia . "\". ";
        ?>
        Em breve nossa equipe entrará em contato!
    </p>

    <p style="text-align: center;">
        <a href="cadastro.html">Voltar ao Formulário</a>
    </p>

</div>

</body>
</html>