<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes étudiant.e.s</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <?php

        $val1 = null;
        $resultat = null;

        if(isset($_POST["val1"])){
            $val1 = $_POST["val1"];

            if($val1 < 10){
                $resultat = "Votre appréciation est 'I' comme 'Inadmissible'. :( ";
                }
            if(($val1 >= 10) && ($val1 <= 12)){
                $resultat = "Votre appréciation est 'S' comme 'Sensiblement passable'.";
                }
            if(($val1 >= 13) && ($val1 <= 15)){
                $resultat = "Votre appréciation est 'B' comme 'Bien'.";
                }
            if(($val1 >= 16) && ($val1 <= 18)){
                $resultat = "Votre appréciation est 'TB' comme 'Très Bien'. :D";
                }
            if(($val1 >= 19)){
                $resultat = "Excellent ! Bravo! ";
                }
        };

        ?>
    <div>
    
        <form action="" method="post">
            <h1><em>Votre appréciation</em></h1>
            <label for="note">Entrez votre note</label></br>
            <input type="number" name="val1">
            <input type = "submit" name = "envoyer" value = "envoyer">
            
            </br>
            <?php echo $resultat;?>
        </form>
    </div>
</body>

</html>