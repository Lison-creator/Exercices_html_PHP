<?php

    $mul = 2;
    $i = 0;

        while($i < 10){
            $result = ($mul * $i);
            echo ("$mul"."X"."$i"."="."$result <br>");
            $i++;
        }

        for($i = 0; $i <= 10; $i++){
            $result = ($mul * $i)."<br>";
            echo ("$mul"."X"."$i"."="."$result <br>"); 
        }

        do{
            $result = ($mul * $i);
            echo "$mul" . " X "."$i". "=". "$result <br>";
            $i++;
        } while ($i <= 10);
    




/*
do {
    $produit = 2 * $mult;
        echo "2 x $mult = $produit <br>";
        $mult = $mult + 1;
} while ($produit !== 20)
*/

?>

