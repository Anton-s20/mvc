<?php  
	class DefaultModel {
		public $datab;
    	public function __construct($username, $password){
       	 try {
             $this->datab = new PDO('mysql:dbname=new_project;host=localhost;charset=utf-8',$username, $password);
        	 } catch (PDOException $e) {
            	echo "Возникла ошибка соединения: ".$e->getMessage();
				exit;
        }
    }
?>