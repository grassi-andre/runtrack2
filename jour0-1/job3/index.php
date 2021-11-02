<?php
$table=["Type","Nom","Valeur"];
$nom2="André";
$type2="Humain";
$valeur2=10.5;
$annee=2021;
$go=true;
?>


 <table border=1>
     <thead>
        <tr>
        <td><?php echo $table [0]; ?></td>
        <td><?php echo $table [1]; ?></td>
        <td><?php echo $table [2]; ?></td>
        </tr>
</thead>   
 
 <tbody>
 <tr>
 <td><?php echo gettype ($nom2); ?></td>
 <td><?php echo '$nom2'; ?></td>
 <td><?php echo $nom2; ?></td>
 </tr>
 <tr>
 <td><?php echo gettype ($type2); ?></td>
 <td><?php echo '$type2'; ?></td>
 <td><?php echo $type2; ?></td>
 </tr>
 <tr>
 <td><?php echo gettype ($valeur2); ?></td>
 <td><?php echo '$valeur2'; ?></td>
 <td><?php echo $valeur2; ?></td>
 </tr>
 <tr>
 <td><?php echo gettype ($annee); ?></td>
 <td><?php echo '$annee'; ?></td>
 <td><?php echo $annee; ?></td>
 </tr>
 <tr>
 <td><?php echo gettype ($go); ?></td>
 <td><?php echo '$go' ; ?></td>
 <td><?php echo $go; ?></td>
 </tr>
 
 </table>
 </tbody>
