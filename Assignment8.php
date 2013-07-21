<?php


/*

 * RiddlespurGuestbook v1.0 -r7

 * 19 July 2013 : 7:54pm
 // COURTESY DEANNA RIDDLESPUR

 *

 * HOW IT WORKS

 * RIDDLESPURGuestbbok is a simple HTML PHP guestbook program that does not use any type of database.

 * The user is to input data into the form if the user does not input information, a warning message will come up onsubmit

 * The user is to go back and fill in all of the fields with some type of information. This Guestbook does NOT check for 

 * the correct input it just makes sure that something is in the field.

 * The user then submits the information and gets a thank you note, the user then clicks on the link to go back to the page to see the guestbook

 * entry added to the bottom of the other entries.

 */



?>

<HEAD>

<style type="text/css">//styling 

<!--
.style1 {font-size: 12px}
body,td,th {
  font-size: 25px color:yellow;
}
a {
	font-size: 12px;
}
body {
	background-color: pink;
	SCROLLBAR-FACE-COLOR: #0066FF; MARGIN: 0px; SCROLLBAR-HIGHLIGHT-COLOR: #0066FF; SCROLLBAR-SHADOW-COLOR: #0066FF; SCROLLBAR-3DLIGHT-COLOR: #0066FF; SCROLLBAR-ARROW-COLOR: #51B0F2; SCROLLBAR-TRACK-COLOR: #51B0F2; Courier New; SCROLLBAR-DARKSHADOW-COLOR: #000000
}
#footer {font-size: small;
         text-align:center;
  			clear:right;
         padding-bottom:20px;
}
a:link {
	color: #0066FF;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #0066FF;
}
a:hover {
	text-decoration: underline;
	color: #0066FF;
}
a:active {
	text-decoration: none;
}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><BODY>
<form method="post" action="addguestbook.php">

<div align="center"></div>
<div style="text-align: center;"><IMG HEIGHT="200" WIDTH="300" SRC="guestbook1.gif" ALT="image"></div>


<div align="center" <p> Please leave us a comment</p></div>
<div align="center" <p> * means required field</p></div>
<div id="fb-root"></div>
<div id="fb-root"></div>
		<script>(function(d, s, id) {
  					var js, fjs = d.getElementsByTagName(s)[0];
  					if (d.getElementById(id)) return;
  						js = d.createElement(s); js.id = id;
  					js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=155379194883";
  					fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));</script>

		<div class="fb-like" data-href="http://www.ctcsports.org/upload/Summer2013/CIST2351/900104329/Assignment8/Assignment8.php" data-send="true" data-width="450" data-show-faces="true" data-font="arial"></div>
<div align="center" class="style1"></div>
<div align="center"><span class="style1">Name*:</span><br />
<input name="name" type="text" size="30" maxlength="40" />
  <br />
  <span class="style1"><br />
  Email*:</span><br />
<input name="email" type="text" size="30" maxlength="40" />
<br />
<br />
<span class="style1">Home Page*:</span><br />
<input name="site" type="text" size="30" value="http://" maxlength="100" />
<br />
<br />
<span class="style1">Message*:</span><br />
<textarea name="msg" cols="22" rows="6"></textarea>
<br />
<br />
<input type="reset" value="Reset" />
&nbsp;
<input type="submit" value="Send" />
</div>
<div align="center">
  <p>&nbsp;</p>
<?php
$file = "guestbook.txt";

if (fopen($file, "r")) {
$fil = "guestbook.txt";
$fo = fopen ($fil, "r");
$con = fread ($fo,filesize ($fil));
fclose ($fo);
echo "$con";
} else {
echo "<h3>Sorry there was an error please contact us now<h3>";
}
?>
 <p id="footer">Copyright &copy; 2013 DeAnna Riddlespur</p>
 </div>
</BODY>
</HTML>
