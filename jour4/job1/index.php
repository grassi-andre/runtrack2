<?php

$i=0;
foreach($_GET as $nam => $val){
    echo $val;
}

    $i++;

?>


<html>
<body>

<form action="index.php" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

</body>
</html>