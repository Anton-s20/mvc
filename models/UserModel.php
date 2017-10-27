<?php  
require_once ROOT."/models/DefaultModel.php";
	class UserModel extends DefaultModel{
        public function regsForm($data){
        $hash = md5(date('H:i:s Y-m-d'));
        $activated =0;
        $query = " INSERT INTO users (first_name, last_name, email, users_login, users_password, activated, hash) 
          VALUES (:first_name, :last_name, :email, :users_login, :users_password, :activated, :hash)";
            $result = $this->datab->prepare($query);
            $result->bindParam(':first_name', $data['first_name'] , PDO:: PARAM_STR);
            $result->bindParam(':last_name', $data['last_name'] , PDO:: PARAM_STR);
            $result->bindParam(':email', $data['email'] , PDO:: PARAM_STR);
            $result->bindParam(':users_login', $data['users_login'] , PDO:: PARAM_STR);
            $result->bindParam(':users_password', $data['users_password'] , PDO:: PARAM_STR);
            $result->bindParam(':activated', $activated , PDO:: PARAM_INT);
            $result->bindParam(':hash', $hash , PDO:: PARAM_STR);
            $result->execute();
        }  
}
?>