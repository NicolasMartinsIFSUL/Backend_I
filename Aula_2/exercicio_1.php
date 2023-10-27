<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
<?php
$pessoas = [
    [
        "nome" => "João Silva",
        "idade" => 25,
        "email" => "joao.silva@gmail.com",
        "e_civil" => "Solteiro",
        "salario" => 1950.00
    ],
    [
        "nome" => "Rafael Cardoso",
        "idade" => 32,
        "email" => "rafacardoso@gmail.com",
        "e_civil" => "Casado",
        "salario" => 5541.00
    ],
    [
        "nome" => "Gabriela Schidt",
        "idade" => 21,
        "email" => "gabischidt@gmail.com",
        "e_civil" => "Solteiro",
        "salario" => 3214.00
    ],
    [
        "nome" => "Roberta Oliveira",
        "idade" => 38,
        "email" => "roberta.oliveira@gmail.com",
        "e_civil" => "Divorciado",
        "salario" => 4258.00
    ],
    [
        "nome" => "pedrosantos",
        "idade" => 17,
        "email" => "pebolado@gmail.com",
        "e_civil" => "solteiro",
        "salario" => 2100.00
    ]
    ];

echo "<h1>Aula 2 - Exercício Arrays 1</h1>";
echo "<table>";
    echo "<caption>Arrays de dados de pessoas</caption>";
    echo "<thead>";
        echo "<th>Nome</th>";
        echo "<th>Idade</th>";
        echo "<th>E-mail</th>";
        echo "<th>E.Civil</th>";
        echo "<th>Salário</th>";
    echo "</thead>";
    echo "<tbody>";

    foreach($pessoas as $pessoa) {
        echo "<tr>";
        foreach($pessoa as $key => $value) {
            if ($key === 'salario') {
                echo "<td>R$ " . number_format($value, 2, ',', '.') . "</td>";
            } else {
                echo "<td>$value</td>";
            }
        }
        echo "</tr>";
    }
    echo "</tbody>";
echo "</table>";

?>
</body>
</html>