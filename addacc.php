<?php 
	session_start();
	$con = mysqli_connect('127.0.0.1', 'root', '', 'mpit');
	mysqli_query($con, "INSERT INTO users (email, password, name, surname) VALUES ('{$_POST["email"]}', '{$_POST["password"]}', '{$_POST["name"]}', '{$_POST["surname"]}')");
	$query = mysqli_query($con, "SELECT * FROM users WHERE email = '{$_POST["email"]}'");
	if($query!=null){
		header("Location: reg.php?error=На этот адрес уже привязан аккаунт!");
	}
	else {
		header("Location: list.php");
		$query2 = mysqli_query($con, "SELECT * FROM users WHERE email = '{$_POST["email"]}'");
		$string = $query2->fetch_assoc();
		$_SESSION['id']=$string['id'];
	}
	
 ?>