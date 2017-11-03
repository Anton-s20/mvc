
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <!-- jQuery -->
  <script src="/vendors/jquery/jquery.js"></script>
  <!-- moi js-->
  <script type="text/javascript">
          function valid(){
            var message ="";
            var email = $('#email_2').val().trim();
            var first_name = $('#first_name_2').val().trim();
            var last_name = $('#last_name_2').val().trim();
            var users_login = $('#users_login_2').val().trim();
            var users_password = $('#users_password_2').val().trim();
            var users_password_2 = $('#users_password_2_2').val().trim();
            
            var email_length = email.length;
            var minEmail_length = 3;
            var maxEmail_length = 15;
          
            var first_name_length = first_name.length;
            var minfirst_name_length = 3;
            var maxfirst_name_length = 15;

            var last_name_length = last_name.length;
            var minlast_name_length = 3;
            var maxlast_name_length = 15;

            var login_length = users_login.length;
            var minlogin_length = 3;
            var maxlogin_length = 15;

            var password_length = users_password.length;
            var minpassword_length = 3;
            var maxpassword_length = 15;

            var password_2_length = users_password_2.length; 
            var minpassword_2_length = 3;
            var maxpassword_2_length = 15;

            if (email==""){
              message = "error";
              $('#email_2').css('box-shadow', '0 0 3px #CC0000');
              // $('#email_2').tooltip({
              // title : 'Заполните поле Email!',
              // placement: 'right',
              // });
              $('#email').html("Заполните поле Email!");
            }else if (email_length <= minEmail_length || email_length >= maxEmail_length){
              message = "error";
              $('#email').html("Заполните полe Адрес электронной почты правильно, не меньше 4-х символов и не больше 15!<br />");
              $('#email_2').css('box-shadow', '0 0 3px #CC0000');
              // $('#email_2').tooltip({
              // title : 'Заполните поле Email!',
              // placement: 'right',
              // });
            }else if (email!=""){
              $('#email').html("");
              $('#email_2').css('box-shadow', '0 0 3px #00FF00');
              // $('#email_2').tooltip('destroy');
            }

            if (first_name==""){
              message = "error";
              $('#first_name_2').css('box-shadow', '0 0 3px #CC0000');
              // $('#first_name_2').tooltip({
              // title : 'Заполните поле Имя!',
              // placement: 'right',
              // });
              $('#first_name').html("Заполните поле Имя!");
            }else if (first_name_length <= minfirst_name_length || first_name_length >= maxfirst_name_length){
              message = "error";
              $('#first_name').html("Заполните полe Имя правильно, не меньше 4-х символов и не больше 15!<br />");
              $('#first_name_2').css('box-shadow', '0 0 3px #CC0000');
              // $('#first_name_2').tooltip({
              // title : 'Заполните поле Имя!',
              // placement: 'right',
              // });
            }else if (first_name!=""){
              $('#first_name').html("");
              $('#first_name_2').css('box-shadow', '0 0 3px #00FF00');
              // $('#first_name_2').tooltip('destroy');
            }

            if (last_name==""){
              message = "error";
              $('#last_name_2').css('box-shadow', '0 0 3px #CC0000');
              // $('#last_name_2').tooltip({
              // title : 'Заполните поле Фамилия!',
              // placement: 'right',
              // });
              $('#last_name').html("Заполните поле Фамилия!");
            }else if (last_name_length <= minlast_name_length || last_name_length >= maxlast_name_length){
              message = "error";
              $('#last_name_2').css('box-shadow', '0 0 3px #CC0000');
              // $('#last_name_2').tooltip({
              // title : 'Заполните поле Фамилия!',
              // placement: 'right',
              // });
              $('#last_name').html("Заполните полe Фамилия правильно, не меньше 4-х символов и не больше 15!<br />");   
            }else if (last_name!=""){
              $('#last_name').html("");
              $('#last_name_2').css('box-shadow', '0 0 3px #00FF00');
              // $('#last_name_2').tooltip('destroy');
            }

            if (users_login==""){
              message = "error";
              $('#users_login_2').css('box-shadow', '0 0 3px #CC0000');
              // $('#users_login_2').tooltip({
              // title : 'Заполните поле Логин!',
              // placement: 'right',
              // });
              $('#users_login').html("Заполните поле Логин!");
            }else if (login_length <= minlogin_length || login_length >= maxlogin_length){
              message = "error";
              $('#users_login_2').css('box-shadow', '0 0 3px #CC0000');
              // $('#users_login_2').tooltip({
              // title : 'Заполните поле Логин!',
              // placement: 'right',
              // });
              $('#users_login').html("Заполните полe Логин правильно, не меньше 4-х символов и не больше 15!<br />");   
            }else if (users_login!=""){
              $('#users_login').html("");
              $('#users_login_2').css('box-shadow', '0 0 3px #00FF00');
              // $('#users_login_2').tooltip('destroy');
            }

            if (users_password==""){
              message = "error";
              $('#users_password_2').css('box-shadow', '0 0 3px #CC0000');
              // $('#users_password_2').tooltip({
              // title : 'Заполните поле Пароль!',
              // placement: 'right',
              // });
              $('#users_password').html("Заполните поле Пароль!");
            }else if (password_length <= minpassword_length || password_length >= maxpassword_length){
              message = "error";
              $('#users_password_2').css('box-shadow', '0 0 3px #CC0000');
              // $('#users_password_2').tooltip({
              // title : 'Заполните поле Пароль!',
              // placement: 'right',
              // });
              $('#users_password').html("Заполните полe Пароль правильно, не меньше 4-х символов и не больше 15!<br />");   
            }else if (users_password!=""){
              $('#users_password').html("");
              $('#users_password_2').css('box-shadow', '0 0 3px #00FF00');
              // $('#users_password_2').tooltip('destroy');
            }
        
            if (users_password_2==""){
              message = "error";
              $('#users_password_2_2').css('box-shadow', '0 0 3px #CC0000');
              // $('#users_password_2_2').tooltip({
              // title : 'Заполните поле Повторить Пароль!',
              // placement: 'right',
              // });
              $('#users_password_3').html("Заполните поле Повторить Пароль!");
            }else if (password_2_length <= minpassword_2_length || password_2_length >= maxpassword_2_length){
              message = "error";
              $('#users_password_2_2').css('box-shadow', '0 0 3px #CC0000');
              // $('#users_password_2_2').tooltip({
              // title : 'Заполните поле Повторить Пароль!',
              // placement: 'right',
              // });
              $('#users_password_3').html("Заполните полe Повторить Пароль правильно, не меньше 4-х символов и не больше 15!<br />");   
            }else if (users_password_2!=""){
              $('#users_password_2_2').css('box-shadow', '0 0 3px #00FF00');
              // $('#users_password_2_2').tooltip('destroy');
              $('#users_password_3').html("");
            }

            if (users_password!=users_password_2){
              message = "error";
              $('#users_password_2_2').css('box-shadow', '0 0 3px #CC0000');
              // $('#users_password_2_2').tooltip({
              // title : 'Пароли не совпадают!',
              // placement: 'right',
              // });
            $('#users_password_3').html("Пароли не совпадают!");
              }else if (password_length >0 && password_2_length>0 && users_password == users_password_2){
              $('#users_password_2_2').css('box-shadow', '0 0 3px #00FF00');
              // $('#users_password_2_2').tooltip('destroy');
              $('#users_password_3').html("");
            }

            if (message == ""){
              $("#formregs").submit();
            }
          }

    $(document).ready(function(){
      $('#email_2').change(function(){
        $.ajax({
          url: "/user/checkemail",
          data: { email_2: $('#email_2').val().trim() },
          dataType: 'json'
        })
        .done(function(data){
          var error = data.is_error;
          var emailCheck = data.message;
          if (error === true){
               $('#email').html(emailCheck);
               $('#email_2').css('box-shadow', '0 0 3px #CC0000');
          }else{
               $('#email').html("");
               $('#email_2').css('box-shadow', '0 0 3px #00FF00');
          };
        });
      });
    });
  </script>
  </head>
  <body>
    <h1>Регистрация пользователя</h1>
    <h3>Пожалуйста, введите ниже свои данные для регистрации:</h3>
    <form onSubmit="valid(); return false;" method="POST" id='formregs'>
      <div  id="r_email">
        <div class="inputregs">
          <label for="email">Адрес электронной почты:</label>
          <input id="email_2" type="email" name="email" value="<?php echo $email ?>" size="15" placeholder="Email" />
          <div id="email"></div>
        </div>
      </div>
      <div class="error">
      <?php 
        echo isset($array['incorrect_email'])? $array['incorrect_email']:'';
      ?>
      </div>
      <div id="r_first_name">
        <div class="inputregs">
          <label for="first_name">Имя:</label>
          <input id="first_name_2" type="text" name="first_name" value="<?php echo $first_name ?>" size="15" placeholder="Имя"/>
          <div class="regserror" id="first_name"></div>
        </div>      
      </div>
      <div class="error">
      <?php 
        echo isset($array['incorrect_first_name'])? $array['incorrect_first_name']:'';
      ?>
      </div>
      <div id="r_last_name">
        <div class="inputregs">
        <label for="last_name">Фамилия:</label>
        <input id="last_name_2" type="text" name="last_name" value="<?php echo $last_name ?>" size="15" placeholder="Фамилия"/>
        <div class="regserror" id="last_name"></div>
        </div>
      </div>
      <div class="error">
      <?php 
          echo isset($array['incorrect_last_name'])? $array['incorrect_last_name']:'';
      ?>
      </div>
      <div id="r_users_login">
        <div class="inputregs">
        <label for="users_login">Ваш логин:</label>
        <input id="users_login_2" type="text" name="users_login" value="<?php echo $users_login ?>" size="15" placeholder="Логин" />
        <div class="regserror" id="users_login"></div>
        </div>
      </div>
      <div class="error">
      <?php 
          echo isset($array['incorrect_login'])? $array['incorrect_login']:'';
        ?>
      </div>
      <div id="r_users_password">
        <div class="inputregs">
        <label for="users_password">Ваш пароль:</label>
        <input id="users_password_2" type="password" name="users_password"  size="15"  placeholder="Пароль"/>
        <div class="regserror" id="users_password"></div>
        </div>
      </div> 
      <div class="error">
      <?php 
           echo isset($array['incorrect_password'])? $array['incorrect_password']:'';
      ?>
      </div>
    
      <div id="r_users_password_2">
        <div class="inputregs">
        <label for="users_password_2" >Повторите Ваш пароль пожалуйста:</label>
        <input id="users_password_2_2" type="password" name="users_password_2"  size="15"  placeholder="Повторить Пароль"/>
        <div class="regserror" id="users_password_3"></div>
        </div>      
      </div>  
      <div class="error">
      <?php 
        echo isset($array['incorrect_password_2'])? $array['incorrect_password_2']:'';
      ?>
      </div>
    <br />
    <input type="submit" name="button"  value="Регистрация">
      <br />
      <br />
    <input type="reset"  value="Очистить и начать все сначала"/>
      <br />
      <br />
    <a href="/user/login">Главная</a>
  </form>
      <div id="footer"></div>
  </body>
</html>