<?php
	session_start();

	if ((!isset($_session['username'])==TRUE)and(!isset($_session['password'])==TRUE)) {
	 	session_unset(); 
	 	header('location:index.php');	
	 } else {
	 	echo "Não foi possivel!!!";
	 }
?>