


<html>
<body>

<form action="index.php" method="get">
Name: <input type="text" name="name"><br>
Age: <input type="text" name="age"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>





<table border = 1>
    <thead>
        <tr>
            <th>Argument</th>
            <th>valeurs</th>
        </tr>
    </thead>
    <tbody>
        <tr>
<td>
<?php
$i=0;


foreach($_GET as $nb => $infos){
        echo $nb.'<br/>';
    }
    $i++;

?>
</td>

<td>
    <?php

$a=0;

foreach($_GET as $nb => $infos){
    echo $infos.'<br/>';
}
$a++;
    ?>
</td>