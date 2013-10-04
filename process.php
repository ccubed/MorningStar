<?php
	//Get POST values
	$subject = "Comment or Suggestion";
	$name = $_POST["name"];
	$lname = $_POST["lastName"];
	$suggest = $_POST["suggestions"];
	$message = "Name: $name $lname
	
	$suggest";	
	
	//Send Email
	mail( "morningstarcd@tds.net", $subject,  $message, "From: morningstarcd@tds.net" );
  
	//Write Thank You
	echo '<HTML><HEAD><title>Thank You</title></HEAD><BODY><font size="18">Thank you for your feedback!</font><p><a href="http://www.morningstarchild.com/">Back to HomePage</a></p></BODY></HTML>';
?>