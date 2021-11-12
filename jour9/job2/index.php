<?php

$bdd = mysqli_connect('localhost','root','root','jour8');


$req = mysqli_query($bdd, "SELECT nom , capacite FROM salles");


$res= mysqli_fetch_all($req, MYSQLI_ASSOC);


echo "<pre>";
var_dump($res);
echo "<pre>";

?>

<table border="1"> 
    <thead>
            <?php foreach($res[0] as $key => $value){
                        echo "<th>$key</th>";
                    }
?>    
        
    </thead>
    <tbody>
        <tr>
            <?php foreach($res[0] as $key => $value){
                        echo "<td>$value</td>";
                    } ?> 
        </tr>
        <tr>

            <?php foreach($res[1] as $key => $value){
                        echo "<td>$value</td>";
                    } ?>
            </td>
        </tr>

        <tr>

            <?php foreach($res[2] as $key => $value){
                        echo "<td>$value</td>";
                    } ?>
            </td>
        </tr>

        <tr>

            <?php foreach($res[3] as $key => $value){
                        echo "<td>$value</td>";
                    } ?>
            </td>
        </tr>
        
        <tr>

            <?php foreach($res[4] as $key => $value){
                        echo "<td>$value</td>";
                    } ?>
            </td>
        </tr>

        <?php foreach($res[5] as $key => $value){
                        echo "<td>$value</td>";
                    } ?>
            </td>
        </tr>

        <?php foreach($res[6] as $key => $value){
                        echo "<td>$value</td>";
                    } ?>
            </td>
        </tr>
    </tbody>
</table>