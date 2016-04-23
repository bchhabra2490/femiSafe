<?php
session_start();
?>
<?php
		if(!isset($_SESSION['username'])){
			header('Refresh:0;URL=login.php');
			die();
			}//authenticate whether user is logged in
?>			