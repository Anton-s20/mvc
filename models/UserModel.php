<?php  
require_once ROOT."/views/DefaultModel.php";
	class UserModel extends DefaultModel{
        public function(){

        $hash = md5(date('H:i:s Y-m-d'));
        $activated =0;

        $query = " INSERT INTO users (first_name, last_name, email, users_login, users_password, activated, hash) 
          VALUES (:first_name, :last_name, :email, :users_login, :users_password, :activated, :hash)";
            $result = $pdo->prepare($query);
            $result->bindParam(':first_name',$first_name , PDO:: PARAM_STR);
            $result->bindParam(':last_name', $last_name , PDO:: PARAM_STR);
            $result->bindParam(':email', $email , PDO:: PARAM_STR);
            $result->bindParam(':users_login', $users_login , PDO:: PARAM_STR);
            $result->bindParam(':users_password',$users_password , PDO:: PARAM_STR);
            $result->bindParam(':activated',$activated, PDO:: PARAM_INT);
            $result->bindParam(':hash', $hash , PDO:: PARAM_STR);
            $result->execute();
             
    }
}
?>