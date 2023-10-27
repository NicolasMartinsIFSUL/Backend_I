<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Exervício laço for</title>
</head>
<body>
    <h1>Aula 1 - exercício 1 (utilizando laço de repetição)</h1>
    <table>
        <caption>Tabuada do 7</caption>
        <tr>
            <th>Multiplicação</th>
            <th>Resultado</th>
            <?php
                $numeroMultiplicado = 7;
                for($i = 1 ; $i <= 10 ; $i++) {
                    echo "<tr>";
                    echo "<td>" . $numeroMultiplicado .  " X " . $i . "</td>"; 
                    echo "<td>" . $numeroMultiplicado * $i . "</td>";
                    echo "</tr>";
                }
            ?>
        </tr>
    </table>
</body>
</html>