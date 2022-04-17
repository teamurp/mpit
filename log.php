<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<meta charset="utf-8">
</head>
<body style="background-image: url()">
	<div class="col-6 mx-auto bg-dark">
		<div class="row mx-auto bg-secondary mt-5">
			<div class="col bg-primary border border-dark">
				
			</div>
			<div class="col bg-primary border border-start-0 border-dark">
				<h1 class="text-center mx-auto pb-5 mt-2">Вход в систему</h1>
				<form action="check.php" method="POST">
					<input type="" name="login" placeholder="Номер телефона/электронная почта" class="form-control">
					<input type="" name="password" placeholder="Пароль" class="form-control mt-2">
					<button class="btn btn-secondary mt-2 mb-5">Войти в аккаунт</button>
				</form>
				<a href="reg.php" class="link-light">Нет аккаунта?</a>
				<p><?php echo $_GET['error'] ?></p>
			</div>
		</div>
	</div>
</body>
</html>