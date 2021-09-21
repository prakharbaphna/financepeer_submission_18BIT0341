<?php 

	session_start();
	if(isset($_SESSION['username'])){
		session_destroy();
		header('location: logina.php');
	}
	else{
		session_destroy();
		header('location: logina.php');
	}

?>