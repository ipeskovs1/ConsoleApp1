<?php
    $_POST['vards']=trim($_POST['vards']);
    $_POST['uzvards']=trim($_POST['uzvards']);
    $_POST['vards']=strip_tags($_POST['vards']);
    $_POST['uzvards']=strip_tags($_POST['uzvards']);
    $_POST['vards']=htmlentities($_POST['vards']);
    $_POST['uzvards']=htmlentities($_POST['uzvards']);
	$_POST['vards']=trim($_POST['vards']);
    $_POST['uzvards']=trim($_POST['uzvards']);
    $_POST['dzdatums']=strip_tags($_POST['dzdatums']);
    $_POST['dzmenesis']=strip_tags($_POST['dzmenesis']);
    $_POST['dzdatums']=htmlentities($_POST['dzdatums']);
    $_POST['dzmenesis']=htmlentities($_POST['dzmenesis']);
    if(!$_POST['vards']){$kluda.="Pietrūkst informācijas!<br>";}
    if(!$_POST['uzvards']){$kluda.="Pietrūkst informācijas!<br>";}
    if(!$kluda)
    { 
		$link = mysql_connect("localhost", "root", "usbw");
        mysql_select_db("viesu_gramata", $link);
        $tabula="dzdienas";
        $sql="INSERT INTO $tabula (vards, uzvards, dzdatums, dzmenesis) values ( '".mysql_real_escape_string($_POST['vards'], $link)."', '".mysql_real_escape_string($_POST['uzvards'], $link)."', '".mysql_real_escape_string($_POST['dzdatums'], $link)."', '".mysql_real_escape_string($_POST['dzmenesis'], $link)."', now())";
        mysql_query($sql, $link);
    }
    header("Location: dzD.html");
?>
