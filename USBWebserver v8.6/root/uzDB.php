<?php
    $_POST['numurs']=trim($_POST['numurs']);
    $_POST['marka']=trim($_POST['marka']);
    $_POST['krasa']=trim($_POST['krasa']);
    $_POST['izlaisanas_gads']=trim($_POST['izlaisanas_gads']);
	
	$_POST['numurs']=strip_tags($_POST['numurs']);
    $_POST['marka']=strip_tags($_POST['marka']);
    $_POST['krasa']=strip_tags($_POST['krasa']);
    $_POST['izlaisanas_gads']=strip_tags($_POST['izlaisanas_gads']);
	
	$_POST['numurs']=htmlentities($_POST['numurs']);
    $_POST['marka']=htmlentities($_POST['marka']);
	$_POST['krasa']=htmlentities($_POST['krasa']);
    $_POST['izlaisanas_gads']=htmlentities($_POST['izlaisanas_gads']);
    
    if(!$_POST['numurs']){$kluda.="Pietrūkst informācijas!<br>";}
    if(!$_POST['marka']){$kluda.="Pietrūkst informācijas!<br>";}
	if(!$_POST['krasa']){$kluda.="Pietrūkst informācijas!<br>";}
    if(!$_POST['izlaisanas_gads']){$kluda.="Pietrūkst informācijas!<br>";}
	
    if(!$kluda)
    { 
		$link = mysql_connect("localhost", "root", "usbw");
        mysql_select_db("auto", $link);
        $tabula="masinas";
        $sql="INSERT INTO $tabula (numurs, marka, krasa, izlaisanas_gads) values ( '".mysql_real_escape_string($_POST['numurs'], $link)."', '".mysql_real_escape_string($_POST['marka'], $link)."', '".mysql_real_escape_string($_POST['krasa'], $link)."', '".mysql_real_escape_string($_POST['izlaisanas_gads'], $link)."')";
        mysql_query($sql, $link);
    }
    header("Location: aforma.html");
?>
