<?php
session_start();
	require 'db_constants.inc.php';
	require 'db_connect.inc.php';
	if(isset($_POST['submit'])){
		$details=mysqli_real_escape_string($_POST['details'],$db);\
		$sql='insert into cases(vid,case_details) values('.$_SESSION['id'].',"'.$details.'")';
		mysqli_query($db,$sql) or die(mysqli_error($db));
		header('Refresh:0;URL=index.php');
	}else{
		header('Refresh:0;URL=index.php');
	}

?>