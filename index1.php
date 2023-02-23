<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial scale=1.0">
       <meta hhtp-equiv="X-UA-Compatible" content="ie=edge">
       <title>Форма регистрации</title>
       <link rel="stylesheet", href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
       <link rel="stylesheet", href="css/style.css">
</head>
<body>
	
	
	<div calss="container mt-4">
		<?php
              if($_COOKIE['igroki'] == ''):
		?>
	
	<div class="row">
		<div class="col">
			<h1>Форма регистрации</h1>
	<form action="prosto.php" method="POST">
	     <input type="text" class="form-control" name="login"
	     id="login" placeholder="Введите логин"><br>
	     <input type="text" class="form-control" name="name"
	       id="name" placeholder="Введите имя"><br>
	          <input type="text" class="form-control" name="pass"
	     id="pass" placeholder="Введите пароль"><br>
	     <button class="btn btn-success" type="submit">Зарегистрировать</button>
	 </form>

	</div>
	<div class="col">
			<h1>Форма авторизации</h1>
	<form action="auntem.php" method="POST">
	     <input type="text" class="form-control" name="login"
	     id="login" placeholder="Введите логин"><br>
	          <input type="text" class="form-control" name="pass"
	     id="pass" placeholder="Введите пароль"><br>
	     <button class="btn btn-success" type="submit">Авторизоваться</button>
	 </form>

	</div>
       <?php else: ?>
               <p>Привет <?=$_COOKIE['igroki']?>. Чтобы выйти сделайте <a href="/evart.php" >здесь</a>.</p>

	<?php endif;?>

	  </div>
	    </div>


  
</body>

</html>
