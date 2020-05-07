<?php
require_once(__ROOT__ . "model/model.php");
require_once(__ROOT__ . "model/storage_model.php");

class Storages extends Model {
	private $storages;
	private $db;
	function __construct() {
		$this->fillArray();
	}

	function fillArray() {
		$this->storages = array();
		$this->db = $this->connect();
		$result = $this->readStorages();
		while ($row = $result->fetch_assoc()) {
			array_push($this->storages, new Storage($row["ID"], $row["product_id"] ,$row["productname"], $row["quantity"] ));
		}
	}

	function getStorages() {
		return $this->storages;

	}

	function readStorages(){
		$sql = "SELECT * FROM storage";

		$result = $this->db->query($sql);
		if ($result->num_rows > 0){
			return $result;
		}
		else {
			return false;
		}
	}

	function insertStorage ($SID, $product_name, $product_id, $quantity){
		$sql = "INSERT INTO storage (ID, product_id, product_name quantity) VALUES ('$SID', '$product_name', '$product_id', '$quantity')";
		if($this->db->query($sql) === true){
			echo "Records inserted successfully.";
			$this->fillArray();
		} 
		else{
			echo "ERROR: Could not able to execute $sql. " . $conn->error;
		}
	}
	
	//I'm too afraid to delete this part :)
	/*function insertProduct($prid, $SID, $product_id, $quantity)
	{
	  $SID = $this->dbh->getConn()->real_escape_string($SID);
	  $product_id = $this->dbh->getConn()->real_escape_string($product_id);
	  $quantity = $this->dbh->getConn()->real_escape_string($quantity);
	 
  
	  $sql = "INSERT INTO product (name, description, origin) 
			  VALUES ('$SID', '$product_id', '$quantity')";
		 
	   ///CHECK echos
	  if($this->dbh->query($sql) === true)
	  {
		echo "Records inserted successfully.";
	  }
	  else
	  {  
		echo "ERROR: Could not execute $sql. " . $conn->error;
	  }
	  //FIX AND TEST
	  //array_push($this->fruits, new Fruit("0","test","1.0"));
	  }
	}*/
  
  
	function editProduct($SID)
	{
	  $SID = $this->dbh->getConn()->real_escape_string($SID);
	  $product_id = $this->dbh->getConn()->real_escape_string($product_id);
	  $quantity = $this->dbh->getConn()->real_escape_string($quantity);
	 
	 $sql = "UPDATE storage SET ID = '$SID', product_id = '$product_id', quantity = '$quantity', WHERE ID = $SID"; 
  
	  ///CHECK echos
	  if($this->dbh->query($sql) === true)
	  {
		echo "Records updated successfully.";
	  }
	  else
	  {  
		echo "ERROR: Could not execute $sql. " . $conn->error;
	  }
	  }
  
  
	function deleteProduct($prid)
	{
	  $sql="DELETE FROM storage WHERE ID = $SID";
		 
	  ///CHECK echos
	  if($this->dbh->query($sql) === true)
	  {
		echo "Record deleted successfully.";
	  } 
	  else
	  {
	  echo "ERROR: Could not execute $sql. " . $conn->error;
  
	
	  }
	}
}