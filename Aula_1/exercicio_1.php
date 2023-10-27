<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Aula 1 - exercício 1</title>
</head>
<body>
    <h1>Aula 1 - exercício 1</h1>
    <table>
        <caption>Tabuada do 7</caption>
        <tr>
            <th>Multipicação</th>
            <th>Resultado</th>
        </tr>
            <?php
                $numeroMultiplicado = 7;
                echo "<tr>";
                echo "<td>7 x 1</td>";
                echo "<td>" . ($numeroMultiplicado) . "</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td>7 x 2</td>";
                echo "<td>" . ($numeroMultiplicado * 2) . "</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td>7 x 3</td>";
                echo "<td>" . ($numeroMultiplicado * 3) . "</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td>7 x 4</td>";
                echo "<td>" . ($numeroMultiplicado * 4) . "</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td>7 x 5</td>";
                echo "<td>" . ($numeroMultiplicado * 5) . "</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td>7 x 6</td>";
                echo "<td>" . ($numeroMultiplicado * 6) . "</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td>7 x 7</td>";
                echo "<td>" . ($numeroMultiplicado * 7) . "</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td>7 x 8</td>";
                echo "<td>" . ($numeroMultiplicado * 8) . "</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td>7 x 9</td>";
                echo "<td>" . ($numeroMultiplicado * 9) . "</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td>7 x 10</td>";
                echo "<td>" . ($numeroMultiplicado * 10) . "</td>";
                echo "</tr>";
            ?>
        </tr>
    </table>
</body>
</html>