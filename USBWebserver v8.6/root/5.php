<meta charset="utf8">

<table border=1>
<?php
$x=1;
for($i=1; $i<=10; $i++)
{
   echo "<tr>"; 
   for($j=1; $j<=10; $j++)
   {
      if ($j==$i || $j == 11 - $i) echo "<td bgcolor=yellow>#";
      else  echo "<td bgcolor=white>#";
      $x++;
   } 
   $x++;
}
?>
</table>