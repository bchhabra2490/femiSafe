<?php
	session_start();
	if(isset($_SESSION['username'])){
		session_destroy();
		header('Refresh:0;URL=login.php');
	}
	header('Refresh:0;URL=login.php');
?>