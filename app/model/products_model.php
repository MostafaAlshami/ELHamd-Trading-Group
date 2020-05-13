<?php
require_once(__ROOT__ . "model/model.php");
require_once(__ROOT__ . "model/product_model.php");

class Products extends Model {
	private $products;
	private $db;
	function __construct() {
		$this->fillArray();
	}

	function fillArray() {
		$this->products = array();
		$this->db = $this->connect();
		$result = $this->readProducts();
		while ($row = $result->fetch_assoc()) {
			array_push($this->products, new Product($row["ID"]));
		}
	}

	function getProducts() {
		return $this->products;

	}

	function readProducts(){
		$sql = "SELECT * FROM product ";

		$result = $this->db->query($sql);
		if ($result->num_rows > 0){
			return $result;
		}
		else {
			return false;
		}
	}

	function insertProduct($prname, $prdesc, $pic, $prorigin){
		$sql = "INSERT INTO product (name, description, pic, origin) VALUES ('$prname','$prdesc', '$pic', '$prorigin')";
		if($this->db->query($sql) === true){
			echo "Records inserted successfully.";
			$this->fillArray();
		} 
		else{
			echo "ERROR: Could not able to execute $sql. " . $conn->error;
		}
	}
	
	//I'm too afraid to delete this part :)
	/*function insertProduct($prid, $prname, $prdesc, $prorigin)
	{
	  $prname = $this->dbh->getConn()->real_escape_string($prname);
	  $prdesc = $this->dbh->getConn()->real_escape_string($prdesc);
	  $prorigin = $this->dbh->getConn()->real_escape_string($prorigin);
	 
  
	  $sql = "INSERT INTO product (name, description, origin) 
			  VALUES ('$prname', '$prdesc', '$prorigin')";
		 
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
  
  
	function editProduct($prid, $prname, $prdesc, $pic, $prorigin)
	{
	  $prname = $this->dbh->getConn()->real_escape_string($prname);
	  $prdesc = $this->dbh->getConn()->real_escape_string($prdesc);
	  $prorigin = $this->dbh->getConn()->real_escape_string($prorigin);
	 
	 $sql = "UPDATE product SET name = '$prname', description = '$prdesc', pic = '$pic',  origin = '$prorigin', WHERE ID = $prid"; 
  
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
	  $sql="DELETE FROM product WHERE ID = $prid";
		 
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