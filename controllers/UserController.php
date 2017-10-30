<?php
require_once ROOT."/models/UserModel.php";
class UserController{
	public function Registration(){
		$data = $_POST;
		if (!empty($_POST)){
			$con = new UserModel();
			$con->regsForm($data);
		}

		require_once ROOT."/views/registration.php";
	}
}
?>