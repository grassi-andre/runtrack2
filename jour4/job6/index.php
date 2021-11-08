<html>
<body>

<form action="index.php" method="post">
nombre: <input type="text" name="nombre"><br>
<input type="submit">
</form>

<?php


    if($_POST ['nombre'] %2==0){
        echo 'Nombre pair';
}

    else{
        echo 'Nombre impair';
    }