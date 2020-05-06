<?php
require_once(__ROOT__ . "model/model.php");
require_once(__ROOT__ . "model/user_model.php");

class users_model extends model {
    private $users;
    function __construct()
    {
		$this->fillArray();
	}

    function fillArray()
    {
		$this->users = array();
		$this->db = $this->connect();
		$result = $this->readUsers();
        while ($row = $result->fetch_assoc()) 
        {
			array_push($this->users, new user_model($row["ID"],$row["username"],$row["password"],$row["emp_ID"]));
		}
	}

	function getUsers() 
	{
		return $this->users;
	}

	function readUsers()
	{
		$sql = "SELECT * FROM user";

		$result = $this->db->query($sql);
        if ($result->num_rows > 0)
        {
			return $result;
		}
		else 
		{
			return false;
		}
	}

	function registerUser($username, $pass, $empid)
	{
        $sql = "INSERT INTO user (username, password, emp_id) VALUES ('$name','$pass', '$empid')";
		
		if($this->db->query($sql) === true)
        {
			echo "Records inserted successfully.";
			$this->fillArray();
		} 
		else
		{
			echo "ERROR: Could not able to execute $sql. " . $conn->error;
		}

    }
}

?>