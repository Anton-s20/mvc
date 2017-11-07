
<!DOCTYPE html>
<html>
	<html lang="ru">
<head>	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	 <!-- jQuery -->
	<script src="/vendors/jquery/jquery.js"></script>
	<!-- moi js-->
	<script type="text/javascript">
		$(document).ready(function(){
		});
	</script>
</head>
<body>
	<h2>Привет мир!</h2>
	<form onSubmit="valid();" action="/tvitter/getFollowers" name="form_tvit" method="GET" id='form_t'>
	    <div id="tvit_id">
	    	<label>Введите имя пользователя Tvitter!:</label>
	    	<input id="user_t" type="text" name="name" placeholder="Пользователь Tvitter"/>
	    	<div id="error">
	    		<?php
	    			echo isset($array['error'])? $array['error']:'';
	    		?>
	    	</div>
	    </div>
	    <div>
	    
	    	<?php
	    		echo  "<h3>Список подписчиков:</h3>";
	    		if (isset($array) && !empty($array)){
	    			foreach($array as $users){
	        			echo $users['name']."<br />";
	        		}
	        	}
	       ?>
	    </div>
	    <br />
	    <br />
	    <input type="submit" value="Найти подписчиков">
		<br />
		<br />
		<a href="/user/logout">Выход</a>
	</form>
	<div id="footer"></div>
</body>
</html>