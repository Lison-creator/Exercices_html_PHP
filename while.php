<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Exo 2 - boucle while</h2>
    <table>
        <tr>
            <?php
                $nombre = 1;
                while($nombre <= 10){
                    $i = 1;
                    echo "<td> La table de $nombre <br>";
                    while($i <=10){
                        $result = $nombre * $i;
                        echo "$nombre x $i = $result <br>";
                        $i++;
                    }
                    echo "</td>";
                    $nombre++;
                }
            ?>
        </tr>
    </table>
</body>
</html>