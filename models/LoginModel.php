<?php  
require_once ROOT."/models/DefaultModel.php";
	class LoginModel extends DefaultModel{
        public function loginForm($data){
            $array=array();
            $message ='';
            $users_login = '';
            if (!empty($data)){
                $users_login = trim($data ['users_login']);
                $users_password = trim($data ['users_password']);
                if ($users_login==""){
                    $message ="error";
                    $array['null_login']="Поле Логин не заполнено!";
                }
                if ($users_password==""){
                    $message ="error";
                    $array['null_password']="Поле Пароль не заполнено!";
                }
                if ($message ==""){
                    $query = "SELECT * FROM users WHERE users_login='$users_login' AND users_password='$users_password' ";
                    $result = $this->datab->($query);
                    $a = $result->fetch(PDO::FETCH_ASSOC);
                    if(!empty($a)){
                        session_start();
                        $_SESSION['users_id'] = $a['users_id'];
                        $_SESSION['users_login'] = $users_login;
                        header('Location: /views/hello.php');
                    }else{
                        header('Location: /views/registration.php');
                    }
                }
            }
        }  
    }
?>
