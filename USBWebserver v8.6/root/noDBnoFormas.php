<?php
$_POST['ko']=trim($_POST['ko']);
$_POST['ko']=strip_tags($_POST['ko']);
$_POST['ko']=htmlentities($_POST['ko']);
$ko=$_POST['ko'];
$kluda="";
if(!$_POST['ko'])
{
	$kluda.="Pietrūkst informācijas!<br>";
}
if(!$kluda)
{
	$sql="SELECT `MASINAS`.`numurs`, `MASINAS`.`marka`, `MASINAS`.`krasa`, `MASINAS`.`izlaisanas_gads` FROM `MASINAS` WHERE (`MASINAS`.`numurs` like '$ko')";
	$link = mysql_connect("localhost", "root", "usbw");
	mysql_select_db("auto", $link);
	mysql_query("SET NAMES utf8 COLLATE utf8_bin", $link);
	$sqlrezultats = mysql_query($sql, $link);
	for($i=0;$i<mysql_num_rows($sqlrezultats);$i++)
	{
		$rezultats[$i]=mysql_fetch_array($sqlrezultats);
	}
}
?>
<html>
<head>
<meta content="text/html; charset=utf8"  http-equiv="content-type">
<title>Datu pieprasījuma rezultāts</title>
</head>
<body>
<?php
echo "<table border=\"1\" width=\"400\">";
for($i=0;$i<count($rezultats);$i++)
{
	echo "<tr>
	<td>".$rezultats[$i]['numurs']."</td>
	<td>".$rezultats[$i]['marka']."</td>
	<td>".$rezultats[$i]['krasa']."</td>
	<td>".$rezultats[$i]['izlaisanas_gads']."</td>
	

	</tr>";
}
echo "</table>";
?>
</body></html>