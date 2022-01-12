<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type"
		content="text/html;charset=utf-8">
</head>
<body>
<?php
echo "<pre>";
for($i=1; $i<=10; $i++)
{
      for($j=1; $j<=$i; $j++)
	  {
        echo $j."&nbsp;";
        if($j==$i)
		{
            echo "";
            echo "<br/>";
        }
      }
}
echo "</pre>";
?>
</body>
</html>