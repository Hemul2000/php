<!DOCTYPE.html!>
<html>
<head>
	<meta = charset = "utf-8">
	<link rel = "stylesheet" href = "style.css" >
	<title>Форма Входа</title>
</head>

<body>

	<?php 
		$username = "maria";
		$userpassword = "luchko";
		$user = 0;
		if (isset($_POST['name']) && $_POST['name'] == $username){
				++$user;}
		if (isset($_POST['password']) && $_POST['password'] == $userpassword){
				++$user;
		}
		if ($user == 2){
			echo "<meta http-equiv=\"refresh\" content=\"0;URL=index2.html\">";}
		else {$wrong = '<h2>Неверная пара логин/пароль.</h2>';}
		?>

	<div class = "forma">
		<div>
			<img  src = "1.png" height = "90px">
			<p>Добро пожалвоать!</p>
			<p>Введите правильное имя<br>
			и пароль пользователя для<br>
			для входа на сайт</p>
			
			<a href= "#">Регистрация</a>
		</div>
		
		<div class = "forma_vhod">
		<div class = "forma_fon">
		<h2>Вход</h2>
		<div class = "vxod">
		<p><b>Имя пользователя</b><br><input type = "tex"></p>
				<p><b>Пароль</b><br><input type = "tex"></p>
		<br>
		
		<input class = "knopka" type="submit" name="auth" value="Вход">
				        <?php echo $wrong; ?>
</div>
		</div>
		</div>

	</div>


</body>

</html>
