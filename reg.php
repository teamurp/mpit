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
				<h1 class="text-center mx-auto pb-5 mt-2">Регистрация</h1>
				<form action="addacc.php" method="POST">
					<input type="" name="login" placeholder="Номер телефона" class="form-control">
					<input type="" name="email" placeholder="Адрес электронной почты" class="form-control mt-2">
					<div class="input-group">
						<input type="" name="name" placeholder="Имя" class="form-control mt-2">
						<input type="" name="surname" placeholder="Фамилия" class="form-control mt-2">
					</div>
					<input type="" name="password" placeholder="Пароль" class="form-control mt-2">
					<button class="btn btn-secondary mt-2 mb-5">Зарегистрироваться</button>
				</form>
				<a href="log.php" class="link-light">Есть свой аккаунт?</a>
				<p><?php echo $_GET["error"] ?></p>
			</div>
		</div>
	</div>
</body>
</html>