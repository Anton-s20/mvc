<?php
ob_start();
  	if (!empty($_SESSION["users_id"])){
  		header('Location: /user/welcomePage');
  	}
	if (!empty($_SESSION['succes'])){
      	echo  "Регистрация прошла успешно!";
      	// $_SESSION['succes']="";
  	}
?>
<!DOCTYPE html>
<html>
	<html lang="ru">
<head>	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
 <h1>Добро пожаловать на наш сайт!</h1>
 <h4> Пожалуйста, введите ниже Ваш логин и пароль или <a href="/user/registration">зарегистрируйтесь!</a></h4>
	<form onSubmit="valid();" name="form" method="POST" id='form'> 
	    <label for="users_login" >Логин</label>
	    <div id="c_login">
	      	<input type="text" id="users_login" name="users_login" placeholder="Логин" >
	    </div>
	    <label for="users_password">Пароль</label>
	    <div id="c_password">
	      	<input type="password" id="users_password" name="users_password" placeholder="Пароль" >
	    </div>
	    <input type="submit" value="Вход">
	</form>
	<div id="footer"></div>
</body>
</html>