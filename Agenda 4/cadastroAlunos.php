<!DOCTYPE 
html> <html lang="pt-BR"> 
<head>
    <meta charset="UTF-8"> 
    <title>Cadastro de Alunos</title> 
</head> 

<body> 
    
<h2>Lista de Alunos</h2> 

<?php 

// Lista de alunos cadastrados 
$alunos = [ 
    ["nome" => "João", "idade" => 17], 
    ["nome" => "Maria", "idade" => 16], 
    ["nome" => "Pedro", "idade" => 18], 
    ["nome" => "Ana", "idade" => 17] 
]; 
 
// Função para mostrar os dados do aluno 
function mostrarAluno($nome, $idade) 
{
        echo "Nome: " . $nome . " - Idade: " . $idade . " anos"; 
        echo "<br>"; 
} 
    
    echo "<h3>Alunos cadastrados:</h3>"; 

// Variável para numerar os alunos 
$numero = 1; 
 
// Estrutura de repetição foreach 
foreach ($alunos as $aluno) { 
    echo $numero . " - "; 

    // Chamada da função 
    mostrarAluno($aluno["nome"], $aluno["idade"]); 
    
    $numero++;     
} 

?> 

</body> 
</html>