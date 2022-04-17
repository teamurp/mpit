<?php 
	session_start();
	$con = mysqli_connect('127.0.0.1', 'root', '', 'mpit');
	$query = mysqli_query($con, "SELECT * FROM users WHERE email = '{$_GET["email"]}' and password = '{$_GET["password"]}' or phone = '{$_GET["email"]}' and password = '{$_GET["password"]}'");
	$stroka = $query->fetch_assoc();
	if($stroka!=null){
		header("Location: list.php");
		$_SESSION['id']=$stroka['id'];
	}
	else {
		header("Location: log.php?error=Нет такого пользователя!");
	}
 ?>