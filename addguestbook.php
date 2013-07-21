<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body,td,th {
  font-size: 12px;
	color: yellow;
}
a:link {
	text-decoration: none;
	color: orange;
}
a:visited {
	text-decoration: none;
	color: red;
}
a:hover {
	text-decoration: underline;
	color: #0066FF;
}
a:active {
	text-decoration: none;
}
body {
	background-color: pink;
	SCROLLBAR-FACE-COLOR: #0066FF; MARGIN: 0px; SCROLLBAR-HIGHLIGHT-COLOR: #0066FF; SCROLLBAR-SHADOW-COLOR: #0066FF; SCROLLBAR-3DLIGHT-COLOR: #0066FF; SCROLLBAR-ARROW-COLOR: #51B0F2; SCROLLBAR-TRACK-COLOR: #51B0F2; Courier New; SCROLLBAR-DARKSHADOW-COLOR: #000000
}
-->
</style>
</HEAD>
<BODY>
<?php

$file           = "guestbook.txt";
$name		= $_POST['name'];
$email		= $_POST['email'];
$site   	= $_POST['site'];
$msg		= $_POST['msg'];
$site   = stripslashes($site);
$msg  = stripslashes($msg);
$email  = stripslashes($email);
$name = stripslashes($name);
$msg = str_replace ("<","&lt;",$msg);
$msg = str_replace ("\n","<br>",$msg);
$site = str_replace ("<","&lt;",$site);
$site = str_replace ("\n","<br>",$site);
$email = str_replace ("<","&lt;",$email);
$email = str_replace ("\n","<br>",$email);
$name = str_replace ("<","&lt;",$name);
$name = str_replace ("\n","<br>",$name);


if(empty($email) || empty($name) || empty($msg)) {
	echo "<h3>Sorry all fields are required</h3>";
} else {

$fp = fopen($file,"a");

fwrite($fp, '
<font size="3">
<BR><BR>
Name: '.$name.'<BR>
Email: <a href="mailto:'.$email.'">'.$email.'</a><BR>
Home Page: <a href="'.$site.'">'.$site.'</a><BR>Message: '.$msg.'<BR>
');

fclose($fp);

echo '<font size="3"><p align="center">Thank you '.$name.' for singing my guestbook</p></font>'; 
}
?>
<div align="center"></div>
<div align="center"></div>
<div align="center"></div>
<div align="center"></div>
<p align="center"><a href="Assignment8.php">Back to GuestBook</a></p>
<div align="center"></div>
</BODY>
</HTML>
