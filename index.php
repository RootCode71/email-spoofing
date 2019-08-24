<?php
session_start();
if ($_POST['Submit'] == 'Send')
{
if (strcmp(md5($_POST['user_code']),$_SESSION['ckey']))
	{ 
header("Location: index.php?msg=ERROR: Invalid Verification Code");
exit();
  } 

$to 		= $_POST['toemail'];
$SUBJECT 	= $_POST['subject'];
$message 	= $_POST['message'];
$fromemail  = $_POST['fromemail'];
$fromname 	= $_POST['fromname'];
$lt= '<';
$gt= '>';
$sp= ' ';
$from= 'From:';
$headers = $from.$fromname.$sp.$lt.$fromemail.$gt;
mail($to,$subject,$message,$headers);
header("Location: index.php?msg= Mail Sent!");
exit();
}
?>
<html>
<head>
	<title>Email Pranks</title>
</head>
	<body background="bg.jpg" background-size="cover">
	<h2 align="center">
		Fake Email Prank Script By Md. Nur Alam (ROOT_CODE)
	</h2>
	<h3 align="center">
		Please do not misuse this script. Use it only for having FUN.
	</h3><br>
	<p style="margin-left:15px">

	<style type="text/css">
		h2,h3{color: #D00A0A}
		b{color: #272822}

	</style>

	<form action="index.php" method="POST">
		<b>FACK NAME:</b><br>
		<input type="text" name="fromname" size="50"><br>
		<br><b>FACK EMAIL:</b><br>
		<input type="text" name="fromemail" size="50"><br>
		<br><b>VICTIM EMAIL:</b><br>
		<input type="text" name="toemail" size="50"><br>
		<br><b>SUBJECT:</b><br>
		<input type="text" name="subject" size="50"><br>
		<br><b>YOUR MESSAGE:</b><br>
		<textarea name="message" rows="5" cols="50">
		</textarea><br>
		<br><b>Verification Code:</b><br>
		<input name="user_code" type="text" size="25">  
		<img src="pngimg.php" align="middle"><br><br>
		<input type="submit" name="Submit" value="Send">
		<input type="reset" value="Reset">
	</form>
	</p>
	<?php if (isset($_GET['msg'])) { echo "<font color=\"red\"><h3 align=\"center\"> $_GET[msg] </h3></font>"; } ?>
	<h3 align="center">
		WARNING: Use it at your own risk. Do not use this for Spamming!.
	</h3>
	</body>
</html>

