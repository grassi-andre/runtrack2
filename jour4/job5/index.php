<html>
<body>

<form action="index.php" method="post">
username: <input type="text" name="username"><br>
password: <input type="text" name="password"><br>
<input type="submit">
</form>

<?php

// POST est préférable a GET car les information recuperer ne sont pas afficher dans l'url meilleur pour une question de securité 

    if($_POST ['username'] == 'John'){

    if($_POST ['password'] == 'Rambo')
            echo 'C\'est pas ma guerre';
}

    else{
        echo 'Votre pire cauchemar';
    }


