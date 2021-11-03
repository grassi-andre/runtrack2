<?php
$a = 2 ;

while ($a <= 1000){

    $b = 0;
    for ( $c=1;$c<=$a;$c++){

    if (($a % $c) == 0){

    $b ++ ;
}
}
    if ($b<3){

    echo $a." <br> ";
}
    $a = $a + 1;
}
?>