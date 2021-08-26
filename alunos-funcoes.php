<?php

function calcularMedia(array $turma){
    $soma = 0;

    foreach ($turma as $aluno) {
        $soma = $soma + $aluno["nota"];
    }

    $media = $soma / count($turma);
    return $media;
}

function verificarMaiorNota(array $turma){
    $melhorAluno = null;

    foreach ($turma as $aluno) {
        if ($melhorAluno == null) {
            $melhorAluno = $aluno;
        } elseif($aluno["nota"] > $melhorAluno["nota"]){
            $melhorAluno = $aluno;
        }
    }
    return $melhorAluno;
}

function alterarNota($turma, $nome, $novaNota){

    foreach ($turma as $aluno) {
        if ($aluno["nome"] == $nome) {
            $aluno["nota"] = $novaNota;
        }
    }



}

$alunos = [
    "1" => [
        "nome" => "Maria",
        "idade" => 16,
        "nota" => 85
    ],
    "2" => [
        "nome" => "Artur",
        "idade" => 16,
        "nota" => 92
    ],
    "3" => [
        "nome" => "Gustavo",
        "idade" => 16,
        "nota" => 80
    ],
    "4" => [
        "nome" => "Isabela",
        "idade" => 17,
        "nota" => 95
    ]
];


$mediaTotalTurmaA = calcularMedia($alunos);
echo "Média:  $mediaTotalTurmaA";

echo "<br><br>";

$melhorAluno = verificarMaiorNota($alunos);
echo "Melhor estudante é " . $melhorAluno["nome"] . " com nota " . $melhorAluno["nota"];
 
echo "<br><br>";

$notaAlterada = alterarNota($alunos, "Isabela", 84);


$alunosTurmaB = [
    "1" => [
        "nome" => "Kelly",
        "idade" => 17,
        "nota" => 100
    ],
    "2" => [
        "nome" => "Paulo",
        "idade" => 16,
        "nota" => 85
    ],
    "3" => [
        "nome" => "Gabriel",
        "idade" => 16,
        "nota" => 82
    ],
    "4" => [
        "nome" => "Mateus",
        "idade" => 16,
        "nota" => 83
    ],
    "5" => [
        "nome" => "Bruna",
        "idade" => 16,
        "nota" => 90
    ]
];

$mediaTotalTurmaB = calcularMedia($alunosTurmaB);
echo "Média (turma B):  $mediaTotalTurmaB";

echo "<br><br>";

$melhorAluno = verificarMaiorNota($alunosTurmaB);
echo "Melhor estudante é " . $melhorAluno["nome"] . " com nota " . $melhorAluno["nota"];
 
echo "<br><br>";

?>
