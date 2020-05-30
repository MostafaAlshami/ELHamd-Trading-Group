<?php
require_once(__ROOT__ . "model/model.php");
require_once(__ROOT__ . "model/storage_model.php");

require_once(__ROOT__ . "interfaces/strategy.php");


//require_once __DIR__ . '/public/vendor/autoload.php';


class Storages extends Model 
{
	private $storages;
	private $db;

	/*
	private $strategy;


	function __construct(Strategy $strategy) 
	{
		$this->fillArray();

		$this->strategy = $strategy;
	}
	*/

	function __construct() 
	{
		$this->fillArray();
	}


	function getStorages() {
		return $this->storages;

	}

	function setStrategy(Strategy $strategy){
		$this->strategy = $strategy;
	}

	/*
	function Report()
	{
		$this->strategy->generate();
	}
	*/


	
	function fillArray() 
	{
		$this->storages = array();
		$this->db = $this->connect();
		$result = $this->readStorages();
		
		if ($result) {
		while ($row = $result->fetch_assoc()) {
			array_push($this->storages, new Storage($row["ID"], $row["product_id"] ,$row["productname"], $row["currentq"], $row["date"], $row["inq"], $row["outq"] ));
					}
					
		}
	}



	function readStorages()
	{
		$sql = "SELECT * FROM storage";

		$result = $this->db->query($sql);
		if ($result->num_rows > 0){
			return $result;
		}
		else {
			return false;
		}
	}



	function insertStorage ($product_name, $product_id, $currentq, $date, $inq, $outq)
	{
		$errmsg = "";
		$conn = $this->dbh->getConn();
		$sql = "INSERT INTO storage (product_id, productname, currentq, date, inq, outq) VALUES ('$product_id', '$product_name', '$currentq', '$date', '$inq', '$outq')";
		if($this->db->query($sql) === true){
			echo "Records inserted successfully.";
			$this->fillArray();
		} 
		else{
			$errmsg = "ERROR: Could not execute $sql. " . $conn->error;
			echo $errmsg;		}
	}
	
  


	function editProduct($SID, $product_name, $product_id, $currentq, $date, $inq, $outq)
	{
	$errmsg = "";
	  $conn = $this->dbh->getConn();
	  $SID = $conn->real_escape_string($SID);
	  $product_name = $conn->real_escape_string($product_name);
	  $product_id = $conn->real_escape_string($product_id);
	  $currentq = $conn->real_escape_string($currentq);
	  $date = $conn->real_escape_string($date);
	  $inq = $conn->real_escape_string($inq);
	  $outq = $conn->real_escape_string($outq);
	 
	  $sql = "UPDATE storage SET productname = '$product_name', product_id = '$product_id', currentq = '$currentq', date = '$date', inq = '$inq', outq = '$outq' WHERE ID = $SID"; 
  
	  ///CHECK echos
	  if($this->dbh->query($sql) === true)
	  {
		echo "Records updated successfully.";
	  }
	  else
	  {  
		$errmsg = "ERROR: Could not execute $sql. " . $conn->error;
		echo $errmsg;
	  }
	}
  

  
	function deleteProduct($SID)
	{
	  $conn = $this->dbh->getConn();
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