<?php
   for ($a = 1;$a<=100;$a++){;

    
        if ($a%3==0 && $a%5==0){
            echo "fizzbuzz <br>";
        }
        elseif ($a%3==0){
            echo "fizz <br>";
        }
        elseif ($a%5==0){
            echo "buzz <br>";
        }
        else {
            echo "$a <br>";
        }
    }
?>



