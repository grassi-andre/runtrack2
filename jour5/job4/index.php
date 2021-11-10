<?php




function calcule ($a , $b, $operation)

{
   if ($operation == "add")   
   return ($a + $b);

   elseif ($operation == "mul" )  
   return ($a * $b);

   elseif ($operation == "div" )  
   return ($a / $b);

   elseif ($operation = "soust")  
   return ($a - $b);

   elseif ($operation = "reste") 
   return ($a % $b);
   
}



$result = calcule(22, 4, "add");
echo $result;

?>