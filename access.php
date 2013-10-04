<?php
	$pass = $_POST["passcode"];
	$check = file_get_contents('pass.txt');

	if ( $pass == $check )
	{
		//if right, set cookie and go to page
		setcookie('mstarauth','true',0,'/','morningstarchild.com');
		header('Location:http://www.morningstarchild.com/access.php');
		
	}
	else
	{
		//if wrong, go here
		echo '<HTML><HEAD><title>Wrong Password</title></HEAD><BODY><font size="18">Error 404: Unauthorized. This server has rejected your password.</font></BODY></HTML>';
		
	}
?>