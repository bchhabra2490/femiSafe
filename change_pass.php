<?php
	session_start();
	if(!isset($_SESSION['logged'])){
		header('Refresh:0;URL=home.php');
	}
	require 'db_constants.inc.php';
	require 'db_connect.inc.php';
	
	function myhash($password,$unique_salt){
		$hash=sha1($unique_salt.$password);
		for($i=0;$i<1000;$i++){
			$hash=sha1($hash);
		}
		return $hash;
	}


	if(isset($_POST['submit'])){
		$error=0;
		$pass1=trim($_POST['cpassword']);
		$pass2=trim($_POST['npassword']);
		$pass3=trim($_POST['napassword']);
		$sql='select password,salt from login where username="'.$_SESSION['username'].'"';
		$result=mysqli_query($db,$sql) or die(mysqli_error($db));
		$row=mysqli_fetch_assoc($result);
		$salt=$row['salt'];
		$hash=myhash($pass1,$salt);
		if($hash==$row['password']&&($pass2==$pass3)){
			$newpassword=myhash($pass2,$row['salt']);
			$sql='UPDATE login set password="'.$newpassword.'" where username="'.$_SESSION['username'].'"';
			mysqli_query($db,$sql) or die(mysqli_error($db));
			$error=0;
		}
		else{
			$error=1;
		}
	}
	require 'change_pass.html';
?>