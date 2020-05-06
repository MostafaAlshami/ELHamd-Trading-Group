<?php
  require_once(__ROOT__ . "model/model.php");
?>

<?php

class Storage extends Model 
{
  private $SID;
  private $product_ID;
  private $quantity;
 

  function __construct($SID, $product_ID="", $quantity="")
  {
    $this->SID = $SID;   
    $this->db = $this->connect();

    if("" === $product_ID)
    {
      $this->readStorage($SID);
    }
    else
    {
      $this->product_ID = $product_ID;
      $this->quantity = $quantity;
    }
  }

  function getStorageID() {
    return $this->SID; 
  }
  function setStorageID($SID) {
    return $this->SID = $SID;
  }

  function getProduct_ID() {
    return $this->product_ID; 
  }
  function setProduct_ID($product_ID) {
    return $this->product_ID = $product_ID;
  }

  function getquantity() {
    return $this->quantity; 
  }
  function setquantity($quantity) {
    return $this->quantity = $quantity;
  }


  function readStorage($SID)
  {
    $sql = "SELECT * FROM storage where ID =" .$SID;
    $db = $this->connect();
    $result = $db->query($sql);

    if($result->num_rows == 1)
    {
      $row = $db->fetchRow();
      $this->product_ID = $row["product_ID"];
      $this->quantity = $row["quantity"];
    }
    else
    {
      $this->product_ID = "";
      $this->quantity = "";
    }
  }


  function insertStorage($SID, $product_ID, $quantity, $district, $street, $building, $postcode)
  {
    $product_ID = $this->dbh->getConn()->real_escape_string($product_ID);
    $quantity = $this->dbh->getConn()->real_escape_string($quantity);

    $sql = "INSERT INTO storage (product_ID, quantity, district, street, building, postcode) 
            VALUES ('$product_ID', '$quantity', '$district', '$street', '$building', '$postcode')";
       
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
  }


  function editStorage($SID, $product_ID, $quantity, $district, $street, $building, $postcode)
  {
    $product_ID = $this->dbh->getConn()->real_escape_string($product_ID);
    $quantity = $this->dbh->getConn()->real_escape_string($quantity);
    

    $sql = "UPDATE storage SET product_ID = '$product_ID', quantity = '$quantity' WHERE ID = $SID"; 

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


  function deleteStorage($SID)
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

?>    