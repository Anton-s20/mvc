<?php  
require_once ROOT."/models/DefaultModel.php";
	class LoginModel extends DefaultModel{
        public function loginForm($data){
            if (!empty($data)){
                $users_login = trim($data ['users_login']);
                $users_password = trim($data ['users_password']);

                $query = "SELECT * FROM users WHERE users_login='$users_login' AND users_password='$users_password' ";
                $result = $this->datab->prepare($query);
                $result->bindParam(':users_login',    $users_login,PDO:: PARAM_STR);
                $result->bindParam(':users_password', $users_password,PDO:: PARAM_INT);
                $result->execute();

                return $result->fetch(PDO::FETCH_ASSOC);
            }
        }
    }
?>
