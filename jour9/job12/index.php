<?php
//mysqli_connet = connexion mysql
$bdd = mysqli_connect('localhost','root','root','jour8');

//mysqli_query = executer requete
$req = mysqli_query($bdd, "SELECT prenom,nom,naissance FROM etudiant WHERE naissance BETWEEN '1998-01-01' AND '2018-01-01'");

//mysqli_fetch_all = pour tout recuperer
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

        <tbody>
        <tr>
            <?php foreach($res[1] as $key => $value){
                        echo "<td>$value</td>";
                    } ?> 
        </tr>

        <tbody>
        <tr>
            <?php foreach($res[2] as $key => $value){
                        echo "<td>$value</td>";
                    } ?> 
        </tr>

        