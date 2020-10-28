<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <h2>Tables de multiplication</h2>
    <table>
        <tr>
            <?php

            $mul = 1;
            $i = 1;

            for($i = 1; $i <= 10; $i++){
                echo("<td> Table de $i <br>");
                for($mul = 1; $mul <= 10; $mul++){
                    $result = ($mul * $i)."<br>";
                    echo ("$mul"."X"."$i"."="."$result <br>"); 
                    
            }
            }
            ?>
        </tr>
        </table>
    </body>
    </html>





