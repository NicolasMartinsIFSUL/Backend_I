<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício_2</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Exercício 2 - Aula 1</h1>

    <table>
        <caption>numeros aleatórios</caption>
        <?php
            for($row = 0 ; $row < 10 ; $row++) {
                echo "<tr>";
                for ($col = 0 ; $col < 10 ; $col++) {
                    $num=0;
                    if($row % 2 != 0) {
                        $num = rand(0,100) * 2;
                        echo "<td>" . $num . "</td>";
                    } else {
                        do {
                            $num = rand(0,100);
                        } while ($num % 3 == 0 || $num % 5 == 0);
                        echo "<td>" . $num . "</td>";
                    }

                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>