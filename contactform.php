<?php 

if (isset($_POST['SUBMIT'])) {
	# code...
	$name="$_POST['name']";
	$subject="$_POST['subject']";
	$mailform="$_POST['mail']";
	$message="$_POST['message']";

	$to ="ravalharsh23april@gmail.com";
	$headers = "From: My ".$mailform;
	$txt = "You have received an e-mail from ".$name.".\n\n".$message;
	mail($to, $subject, $txt, $headers);
	


}
















?>