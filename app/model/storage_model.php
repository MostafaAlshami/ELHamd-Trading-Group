<?php
  require_once(__ROOT__ . "model/model.php");
?>

<?php

class Storage extends Model 
{
  private $SID;
  private $product_name;
  private $product_id;
  private $quantity;


   function __construct($SID, $product_name="", $product_id="", $quantity="" )
  {
    $this->SID = $SID;   
    $this->db = $this->connect();

    if(""===$SID)
    {
      $this->readStorage($SID);
    }
    else
    {
      $this->product_id = $product_id;
      $this->product_name = $product_name;
      $this->quantity = $quantity;
    }
  }
  
  public function getSID()
  {
    return $this->SID;
  }


  public function setSID($SID)
  {
    $this->SID = $SID;

    return $this;
  }

  public function getproduct_id()
  {
    return $this->product_id;
  }

 
  public function setproduct_id($product_id)
  {
    $this->product_id = $product_id;

    return $this;
  }
  

  public function getquantity()
  {
    return $this->quantity;
  }

  
  public function setquantity($quantity)
  {
    $this->quantity = $quantity;

    return $this;
  }
/**
   * Get the value of product_name
   */ 
  public function getProduct_name()
  {
    return $this->product_name;
  }

  /**
   * Set the value of product_name
   *
   * @return  self
   */ 
  public function setProduct_name($product_name)
  {
    $this->product_name = $product_name;

    return $this;
  }
  
 
  
  function readStorage($SID)
  {
    $sql = "SELECT * FROM storage";
    $db = $this->connect();
    $result = $db->query($sql); 
    if($result->num_rows == 1)
    {
      $row = $db->fetchRow();
      $this->product_id = $row["product_id"];
      $this->product_name = $row["productname"];
      $this->quantity = $row["quantity"];
    }
    else
    {
      
      $this->product_name = "";
      $this->product_id = "";
      $this->quantity = "";
    }
  }

}



  
  

  


?>    