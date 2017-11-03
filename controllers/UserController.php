<?php
class UserController{

	public function Registration(){
		require_once ROOT."/models/UserModel.php";
		$succes = "Регистрация прошла успешно!";
		$data = $_POST;
		$array=array();
		$email ='';
		$first_name = '';
		$last_name = '';
		$users_login = '';
		$message ="";
		if (!empty($_POST)){
		
		$email = trim($_POST ['email']);
		$email_length = strlen(trim($_POST['email']));

		$minEmail_length = 3;
		$maxEmail_length = 15;
			if (!filter_var($email , FILTER_VALIDATE_EMAIL)){
			 	$array['incorrect_email']="Cтрокa Адрес электронной почты должна быть правильной!<br />";

			}else if ($email_length <= $minEmail_length || $email_length >= $maxEmail_length){	
				$array['incorrect_email']="Заполните полe Адрес электронной почты, не меньше 4-х символов и не больше 15!<br />";
			}

			$first_name = (trim($_POST ['first_name']));
			$first_name_length = strlen(trim($_POST['first_name']));
			$minfirst_name_length = 3;
			$maxfirst_name_length = 15;
			if ($first_name_length <= $minfirst_name_length || $first_name_length >= $maxfirst_name_length){
				$array['incorrect_first_name']="Строка Имя должна иметь не меньше 4-х символов и не больше 15!<br />";
			}
				  
			$last_name = (trim($_POST ['last_name']));
			$last_name_length = strlen(trim($_POST['last_name']));
			$minlast_name_length = 3;
			$maxlast_name_length = 15;
			if ($last_name_length <= $minlast_name_length || $last_name_length >= $maxlast_name_length){
				$array['incorrect_last_name']="Строка 'Фамилия' должна иметь не меньше 4-х символов и не больше 15!<br />";
			}
			 	 
			$users_login = (trim($_POST ['users_login']));
			$login_length = strlen(trim($_POST['users_login']));
			$minlogin_length = 3;
			$maxlogin_length = 15;
			if ($login_length <= $minlogin_length || $login_length >= $maxlogin_length){
					$array['incorrect_login']="Строка 'Логин' должна иметь не меньше 4-х символов и не больше 15!<br />";
			}
			 	
			$users_password = (trim($_POST ['users_password']));
			$password_length = strlen(trim($_POST['users_password']));
			$minpassword_length = 3;
			$maxpassword_length = 15;
			if ($password_length <= $minpassword_length || $password_length >= $maxpassword_length){
				$message = "error";
				$array['incorrect_password']="Строка 'Пароль' должна иметь не меньше 4-х символов и не больше 15!<br />";
			}
			 
			$users_password_2 = (trim($_POST ['users_password_2']));
			$password_2_length = strlen(trim($_POST['users_password_2']));
			$minpassword_2_length = 3;
			$maxpassword_2_length = 15;
			if ($password_2_length <= $minpassword_2_length || $password_2_length >= $maxpassword_2_length){
				$message = "error";
				$array['incorrect_password']="Строка Повторить пароль должна иметь не меньше 4-х символов и не больше 15!<br />";
			}
						
			if ($users_password != $users_password_2){
					$message = "error";
					$array['incorrect_password_2']="Повторите пароль правильно!<br />";
			}
			if ($email ==""){
					$message = "error";
					$array['incorrect_email']="Заполните поле Адрес электронной почты!<br />";
			}
			if ($first_name==""){
					$message = "error";
					$array['incorrect_first_name']="Заполните полe Имя!<br />";
			}
			if ($last_name==""){
					$message = "error";
					$array['incorrect_last_name']="Заполните полe Фамилия!<br />";
			}
			if ($users_login==""){
					$message = "error";
					$array['incorrect_login']="Заполните поле  Логин!<br />";			
			} 
			if ($users_password==""){
					$message = "error";
					$array['incorrect_password']="Заполните поле Пароль!<br />";
			}
			if ($message ==""){
				$con = new UserModel();
				$con->regsForm($data);
	 			session_start();
	    		$_SESSION['succes'] = $succes;
				header('Location: /user/login');
			}
		}
		require_once ROOT."/views/registration.php";
	}
	
	public function Logout(){
 		session_start();
 		session_destroy();
		$_SESSION = array();
		unset($_SESSION["users_id"]);
		
		header('Location: /user/login');
	}
	
	public function Login(){
		require_once ROOT."/models/UserModel.php";
		$array=array();
        $message ='';
		$con = new UserModel();
	 	$data = $_POST;
	 	if (!empty($data)){
		    $users_login = trim($data['users_login']);
		    $users_password = trim($data['users_password']);
			if ($users_login==""){
		        $message ="error";
		        echo $array['null_login']="Поле Логин не заполнено!";
		    }
		    if ($users_password==""){
		        $message ="error";
		        echo $array['null_password']="Поле Пароль не заполнено!";
		    }
		    if ($message ==""){
				$dataFromModel = $con->loginForm($data);
			 	if(!empty($dataFromModel)){
			 		session_start();
		            $_SESSION['users_id'] = $dataFromModel['users_id'];
		            $_SESSION['users_login'] = $users_login;
		            header('Location: /user/welcomePage');
		        }else{
		           	echo "Неправильный логин или пароль!";
		        }
		    }		
		}
		require_once ROOT."/views/avto.php";   
	}

	public function WelcomePage(){
		session_start();
		$this->CheckSession();
 		require_once ROOT."/views/hello.php";
	}


	public function CheckSession(){
		if (isset($_SESSION['users_id'])){
			return true;
		}else{
			header('Location: /user/login');
		}
	}

	public function CheckEmail(){
		require_once ROOT."/models/UserModel.php";
		$email = $_GET['email_2'];
		
		$userModel = new UserModel();
		$emailFromModel = $userModel->CheckEmail($email);
			$error = true;
			if($emailFromModel===1){
				$error = true;
				$emailCheck = 'Такой "email" уже существует!';			 		
		    }else{
		    	$error = false;
		    	$emailCheck = 'Ok!';
		    }
		    echo json_encode(
		    	array(
		    		'is_error' => $error,
		    		'message' => $emailCheck
		    	)
		    );
	}
}
?>