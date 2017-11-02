<?php
class UserController{

	public function Registration(){
		$this->CheckSession();
		require_once ROOT."/models/UserModel.php";
		$succes = "Регистрация прошла успешно!";
		$data = $_POST;
		if (!empty($_POST)){
			$con = new UserModel();
			$con->regsForm($data);
 			session_start();
    		$_SESSION['succes'] = $succes;
			header('Location: /user/login');
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


	 function CheckSession(){
		if (isset($_SESSION['users_id'])){
			return true;
		}else{
			header('Location: /user/login');
		}
	}
}
?>