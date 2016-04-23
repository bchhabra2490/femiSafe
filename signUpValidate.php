		<?php
	session_start();
	require 'db_constants.inc.php';
	require 'db_connect.inc.php';
	//require 'auth.inc.php';
	function unique_salt(){
		return sha1(mt_rand());
	}
		
	function myhash($password,$unique_salt){
		$hash=sha1($unique_salt.$password);
		for($i=0;$i<1000;$i++){
			$hash=sha1($hash);
		}
		return $hash;
	}

	if(isset($_POST['submit'])){
		$username=mysqli_real_escape_string($db,trim($_POST['username']));
		$pass=mysqli_real_escape_string($db,trim($_POST['password']));
		$firstName=mysqli_real_escape_string($db,trim($_POST['fn']));
		$lastName=mysqli_real_escape_string($db,trim($_POST['ln']));
		//$pno=mysqli_real_escape_string($db,trim($_POST['pno']));
		$email=mysqli_real_escape_string($db,trim($_POST['email']));
		$level=mysqli_real_escape_string($db,$_POST['level']);
		//$rollno=mysqli_real_escape_string($db,$_POST['rno']);
		$name=$firstName.' '.$lastName;

		$salt=unique_salt();
		$password=myhash($pass,$salt);
		$sql='insert into login(username,password,salt,level) values("'.$username.'","'.$password.'","'.$salt.'","'.$level.'")';
		$result=mysqli_query($db,$sql) or die(mysqli_error($db));
		$id=mysqli_insert_id($db);
		
		if($level==0){
			$sql='insert into lawyers values('.$id.',"'.$name.'","'.$email.'")';
			$result=mysqli_query($db,$sql) or die(mysqli_error($db));
		}
		$_SESSION['logged']=1;
		$_SESSION['username']=$username;
		header('Refresh:0;URL=home.php');
	}else{
		header('Refresh:0;URL=signup.php');
		die();
	}
?>