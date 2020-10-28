<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <?php

        $val1 = null;
        $val2 = null;
        $oper = null;
        $resultat = null;

        if(isset($_POST["val1"]) && isset($_POST["val2"]) && isset($_POST["operateur"])){
            $val1 = $_POST["val1"];
            $val2 = $_POST["val2"];
            $oper = $_POST["operateur"];

            switch($oper){
                case "+":
                    $resultat = $val1 + $val2;
                break;
                case "-":
                    $resultat = $val1 - $val2;
                break;
                case "*":
                    $resultat = $val1 * $val2;
                break;
                case "/":
                    if ($val2 == 0) {
                        $resultat = "Impossible";
                    }
                    else ($resultat = $val1 / $val2 );
                break;
                }
        }
        ?>
    <div>
    
        <form action="" method="post">
            <h1>Calculatrice</h1>
            <input type="number" name="val1">
            <input type="number" name="val2">
            <input type="radio" name="operateur" value="+"><label for="+">+</label>
            <input type="radio" name="operateur" value="-"><label for="-">-</label>
            <input type="radio" name="operateur" value="*"><label for="*">x</label>
            <input type="radio" name="operateur" value="/"><label for="/">/</label>
            <input type="submit" name="submit" value="=">
            </br>
            <?php echo $resultat;?>
        </form>
    </div>
</body>

</html>

