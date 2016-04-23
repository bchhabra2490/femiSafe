<?php
	require 'db_constants.inc.php';
	require 'db_connect.inc.php';
	

	$sql='create table if not exists login(id int primary key,username varchar(100) unique,password char(40),salt char(40),level enum("0","1") default "0")';
	mysqli_query($db,$sql) or die(mysqli_error($db));

	$sql='create table if not exists lawyers(id int primary key,name varchar(100), email varchar(100))';
	mysqli_query($db,$sql) or die(mysqli_error($db));

	echo 'success';
?>