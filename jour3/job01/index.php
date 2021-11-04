<?php
$numbers = [200 , 204 , 173 , 98 , 171 , 404 , 459];
foreach ($numbers as $value)
    if ($value % 2 == 0) 
    {
        echo $value . 'paires </br>';
    }
    elseif ($value % 2 != 0)
    {
        echo $value . 'impaires </br>';
    }
?>