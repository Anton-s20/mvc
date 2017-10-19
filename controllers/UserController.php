<?php
$_POST= array();
require_once ROOT."/views/UserModel.php";
class UserController
	{
	public function actionRegistration(){
		require_once ROOT."/views/registration.php";
	}
}