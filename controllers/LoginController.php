<?php
require_once ROOT."/models/LoginModel.php";
class LoginController{
	public function Login(){
		require_once ROOT."/views/avto.php";
			$data = $_POST;
			$con = new LoginModel();	
			$con->loginForm($data);
	}
}