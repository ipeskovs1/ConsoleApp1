<meta charset="utf8">

<table border=1>
<?php
$x=1;
for($i=1; $i<=20; $i++)
{
   echo "<tr>"; 
   for($j=1; $j<=20; $j++)
   {
      if ($x%10==0) echo "<td><font color=red>$x</font>";
      else echo "<td>$x";
      $x++;
   } 
}
?>
</table>