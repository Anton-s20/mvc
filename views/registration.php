<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  </head>
  <body>
    <h1>Регистрация пользователя</h1>
    <h3>Пожалуйста, введите ниже свои данные для регистрации:</h3>
    <form action="" onSubmit="valid(); " method="POST" id='formregs'>
      <div id="em">
        <label for="email" class="">Адрес электронной почты:</label>
        <input id="email_2" type="email" name="email" value="" size="15" placeholder="Email" />
      </div> 
      <div id="first_name">
        <label for="first_name" class="">Имя:</label>
        <input id="first_name_2" type="text" name="first_name" value="" size="15"placeholder="Имя"/>
      </div>
      <div id="last_name">
        <label for="last_name" class="">Фамилия:</label>
        <input id="last_name_2" type="text" name="last_name" value="" size="15" placeholder="Фамилия"/>
      </div>
      <div id="users_login">
        <label for="users_login" class="">Ваш логин:</label>
        <input id="users_login_2" type="text" name="users_login" value="" size="15" placeholder="Логин" />
      </div>
      <div id="users_password">
        <label for="users_password" class="">Ваш пароль:</label>
        <input id="users_password_2" type="password" name="users_password" size="15" placeholder="Пароль"/>
      </div>
      <div id="_users_password_2">
        <label for="users_password_2" class="">Повторите Ваш пароль пожалуйста:</label>
        <input class="form-control" id="users_password_2_2" type="password" name="users_password_2"  size="15"  placeholder="Повторить Пароль"/>
      </div>
      <br />
      <input type="submit" class="" name="button"  value="Регистрация">
      <br />
      <br />
      <input type="reset"  class="" value="Очистить и начать все сначала"/>
    </form>
      <div id="footer"></div>
  </body>
</html>