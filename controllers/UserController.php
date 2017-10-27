<?php
require_once ROOT."/models/UserModel.php";
class UserController{
	public function Registration(){
		require_once ROOT."/views/registration.php";
		$data = $_POST;
		if (!empty($_POST)){
			$con = new UserModel();
			$con->regsForm($data);
		}
	}
}