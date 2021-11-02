<?php
$laplat="La Plateforme_";
for($nombre=0;$nombre<=100;$nombre++)
    if($nombre<=20){
        echo "<i><br>$nombre</i>";
    }
    elseif($nombre==42){
        echo "<br>$laplat";
    }
    elseif($nombre>=25 && $nombre<=50){
        echo "<u><br>$nombre</u>";
    }
    else{
        echo "<br>$nombre";
    }
?>