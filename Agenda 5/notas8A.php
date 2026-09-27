<?php

// Array bidimensional com as notas dos quatro bimestres
$alunos = [
    ["nome" => "Marcio", "bimestres" => [8.0, 10.0, 9.0, 7.0]],
    ["nome" => "Alberto", "bimestres" => [7.0, 6.0, 8.0, 9.0]],
    ["nome" => "Sandro", "bimestres" => [5.0, 4.0, 6.0, 7.0]],
    ["nome" => "Orlando", "bimestres" => [7.0, 8.0, 5.0, 6.0]],
    ["nome" => "Daniel", "bimestres" => [10.0, 10.0, 9.0, 10.0]]
];

// O foreach percorre cada aluno do array.
// Calcula a média do primeiro semestre com os dois primeiros bimestres.
// Calcula a média do segundo semestre com os dois últimos bimestres.
// Depois calcula a média final dos dois semestres.
foreach ($alunos as &$aluno) {

    // Média do 1º semestre: 1º e 2º bimestre
    $aluno["primeiroSemestre"] =
        ($aluno["bimestres"][0] + $aluno["bimestres"][1]) / 2;

    // Média do 2º semestre: 3º e 4º bimestre
    $aluno["segundoSemestre"] =
        ($aluno["bimestres"][2] + $aluno["bimestres"][3]) / 2;

    // Média final
    $aluno["media"] =
        ($aluno["primeiroSemestre"] + $aluno["segundoSemestre"]) / 2;
}

unset($aluno);


// Ordena os alunos pela média, da maior para a menor
usort($alunos, function ($a, $b) {
    return $b["media"] <=> $a["media"];
});


// Calcula a média geral da turma
$somaMedias = 0;

foreach ($alunos as $aluno) {
    $somaMedias += $aluno["media"];
}

$mediaGeral = $somaMedias / count($alunos);

?>



<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <title>8º ANO A</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: white;
        }

        h1 {
            background-color: #2196F3;
            color: white;
            text-align: center;
            width: 90%;
            margin: 0 auto 8px auto;
            padding: 8px;
            font-size: 28px;
            font-weight: normal;
        }

        table {
            width: 90%;
            margin: auto;
            border-collapse: collapse;
            text-align: center;
        }

        th {
            background-color: #2196F3;
            color: white;
            padding: 10px;
        }

        td {
            padding: 8px;
            border: 1px solid #ddd;
        }

        tr:nth-child(even) {
            background-color: #f1f1f1;
        }

        .verde {
            color: green;
            font-weight: bold;
        }

        .vermelho {
            color: red;
            font-weight: bold;
        }

        .media-geral {
            background-color: #2196F3 !important;
            color: white;
            font-weight: bold;
        }

    </style>

</head>

<body>

    <h1>8º ANO A</h1>

    <table>

        <tr>
            <th>Nome</th>
            <th>Primeiro Semestre</th>
            <th>Segundo Semestre</th>
            <th>Média Final</th>
        </tr>

        <?php foreach ($alunos as $aluno): ?>

            <?php

            // Define a cor da média
            if ($aluno["media"] >= 6.0) {
                $classe = "verde";
            } else {
                $classe = "vermelho";
            }

            ?>

            <tr>

                <td>
                    <?php echo $aluno["nome"]; ?>
                </td>

                <td>
                    <?php
                    echo number_format(
                        $aluno["primeiroSemestre"],
                        1,
                        ',',
                        '.'
                    );
                    ?>
                </td>

                <td>
                    <?php
                    echo number_format(
                        $aluno["segundoSemestre"],
                        1,
                        ',',
                        '.'
                    );
                    ?>
                </td>

                <td class="<?php echo $classe; ?>">
                    <?php
                    echo number_format(
                        $aluno["media"],
                        1,
                        ',',
                        '.'
                    );
                    ?>
                </td>

            </tr>

        <?php endforeach; ?>

        <tr class="media-geral">

            <td colspan="3">
                Média Geral da Turma
            </td>

            <td>
                <?php
                echo number_format($mediaGeral, 1, ',', '.');
                ?>
            </td>

        </tr>

    </table>

</body>

</html>