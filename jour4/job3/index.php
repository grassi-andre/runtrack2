<?php

$i=0;
foreach($_POST as $nam => $val){
    echo $val;
}

    $i++;

?>


<html>
<body>

<form action="index.php" method="post">
Name: <input type="text" name="name"><br>
Age: <input type="text" name="age"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

</body>
</html>