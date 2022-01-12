<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type"
		content="text/html;charset=utf-8">
</head>
<body>

<?php
echo "Skaitļa 1235 dalitāji ir: <br>";
for ($x = 1; $x <= 1235; $x+=1) 
{
    if (fmod(1235, $x) == 0) 
	{
        echo "$x <br>";;
    }
}
;
?>

</body>
</html>