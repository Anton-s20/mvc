<?php  
class DefaultModel {
	public $datab;
    public function __construct(){
        require_once ROOT."/config/dbConection.php";
       	try{
            $this->datab = new PDO("mysql:dbname=$db_name;host=localhost;charset=utf-8",$username, $password);
         }catch (PDOException $e){
            echo "Возникла ошибка соединения: ".$e->getMessage();
			exit;
            }
        }
    }
?>