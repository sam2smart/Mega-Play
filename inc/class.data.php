<?php

require_once('data/salers end/dbconfig.php');

class USER
{	

	private $conn;
	
	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
    }
	
	
	public function cardPlay($check1,$check2,$check3,$phone,$email,$target_file)
	{
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO game(check1,check2,check3,phone,email,image) 
		                                               VALUES(:check1, :check2, :check3, :phone, :email, :target_file)");
												  
			$stmt->bindparam(":check1", $check1);
			$stmt->bindparam(":check2", $check2);									  
			$stmt->bindparam(":check3", $check3);									  
			$stmt->bindparam(":phone", $phone);									  
			$stmt->bindparam(":email", $email);									  
			$stmt->bindparam(":target_file", $target_file);
				
			$stmt->execute();	
			
			return $stmt;	
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}				
	}
	
}
?>