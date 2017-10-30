<?php
require_once ROOT."/models/LoginModel.php";
class LoginController{
	public function Login(){
		session_start();
			$array=array();
            $message ='';
			$con = new LoginModel();
	 		$data = $_POST;
	 		if (!empty($data)){
		        $users_login = trim($data['users_login']);
		        $users_password = trim($data['users_password']);
				if ($users_login==""){
		            $message ="error";
		            $array['null_login']="Поле Логин не заполнено!";
		        }
		        if ($users_password==""){
		            $message ="error";
		            $array['null_password']="Поле Пароль не заполнено!";
		        }
		        if ($message ==""){
					$dataFromModel = $con->loginForm($data);
			 		if(!empty($dataFromModel)){ 
		                $_SESSION['users_id'] = $dataFromModel['users_id'];
		                $_SESSION['users_login'] = $users_login;
		                header('Location: /welcome/welcomePage');
		            }else{
		                header('Location: /users/registration');
		            }
		        }
		    }

		require_once ROOT."/views/avto.php";
	}
}
?>