<?php

$sql="SELECT * FROM `viesi` ";
$link = mysql_connect("localhost", "root", "usbw");
mysql_select_db("viesu_gramata", $link);
mysql_query("SET NAMES utf8 COLLATE utf8_bin", $link);
$sqlrezultats = mysql_query($sql, $link);
for($i=0;$i<mysql_num_rows($sqlrezultats);$i++)
{
$rezultats[$i]=mysql_fetch_array($sqlrezultats);
}
?>
<html>
<head>
<meta content="text/html; charset=utf8"  http-equiv="content-type">
<title>Datu pieprasījuma rezultāts</title>
</head>
<body>
<?php
for($i=0;$i<count($rezultats);$i++)
{
echo "<table border=\"1\">
<tr>
<td width=\"100\">".$rezultats[$i]['autors']."</td>
<td width=\"500\">".$rezultats[$i]['komentars']."</td>
<td width=\"500\">".$rezultats[$i]['datums']."</td>
</tr>";
}
echo "</table>";
?>
</body></html>