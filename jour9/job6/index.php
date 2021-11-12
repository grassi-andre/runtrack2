<?php

$bdd = mysqli_connect('localhost','root','root','jour8');


$req = mysqli_query($bdd, "SELECT count(*) FROM etudiant ");


$res= mysqli_fetch_all($req, MYSQLI_ASSOC);


echo "<pre>";
var_dump($res);
echo "<pre>";

?>

<table border="1"> 
    <thead>
            <th>nb_etudiant</th>   
        
    </thead>
    <tbody>
        <tr>
            <?php foreach($res[0] as $key => $value){
                        echo "<td>$value</td>";
                    } ?> 
        </tr>
        