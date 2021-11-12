<?php

$bdb = mysqli_connect("localhost","root","root","jour8");
$req = mysqli_query($bdb,"SELECT * FROM etudiant");
$res = mysqli_fetch_all($req);


foreach($res as $key => $value){
    echo $value [1], '<br/>';
}
var_dump($res);

?>

<table>
    <thead>
        <tr>
            <th> </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>