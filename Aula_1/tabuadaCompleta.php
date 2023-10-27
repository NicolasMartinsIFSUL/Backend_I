<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Tabuada completa</title>
</head>
<body>

    <h1>Tabuada completa</h1>
    
        <?php
            for($i = 1 ; $i <= 10 ; $i++) {
                echo "<table>";
                echo "<tr>";
                echo "<th>Multiplicação</th>";
                echo "<th>Resultado</th>";
                
                echo "<tr>";
                for($j = 1 ; $j <= 10 ; $j++) {
                    echo "<td>" . $i . "X" . $j . "</td>";
                    echo "<td>" . $i * $j . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
        ?>


    
</body>
</html>