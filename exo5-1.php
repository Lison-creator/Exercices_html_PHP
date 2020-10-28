<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table multiplication</title>
    <link rel="stylesheet" href="style.css">
</head>
    <body>
        <div>
            <h1>Tables de multiplication</h1>
            <?php
            if (isset($_POST["nb"])){
                $nb = $_POST["nb"];
                $mul = 1;
                $resultat = null;

                while ($nb < 11) {
                    $resultat = ($nb * $mul);
                    echo "$mul"."X". "$nb"."="."$resultat";
                    $nb++;
                    
                };
            }
            
            ?>
        <form action="" method="post">
            <label for="note">Entrez un chiffre</label></br>
            <input type="number" name="nb">
            <input type = "submit" name = "envoyer" value = "envoyer">
            
            </br>
        </form>
        </div>
</body>
</html>
