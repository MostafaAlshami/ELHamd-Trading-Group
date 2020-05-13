<?php
  require_once(__ROOT__ . "model/model.php");
?>

<?php

class Storage extends Model 
{
  private $SID;
  private $product_name;
  private $product_id;
  private $currentq;
  private $date;
  private $inq;
  private $outq;

   function __construct($SID, $product_id="", $product_name="", $currentq="", $date="", $inq="", $outq="" )
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
      $this->currentq = $currentq;
      $this->date =$date;
      $this->inq = $inq;
      $this->outq = $outq;
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

 
  public function setdate($date)
  {
    $this->date = $date;

    return $this;
  }
  
  public function getdate()
  {
    return $this->date;
  }

 
  public function setproduct_id($product_id)
  {
    $this->product_id = $product_id;

    return $this;
  }
  public function getcurrentq()
  {
    return $this->currentq;
  }

  
  public function setcurrentq($currentq)
  {
    $this->currentq = $currentq;

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
      $this->currentq = $row["currentq"];
      $this->date = $row["date"];
      $this->inq = $row["inq"];
      $this->outq = $row["outq"];

    }
    else
    {
      
      $this->product_name = "";
      $this->product_id = "";
      $this->currentq = "";
      $this->date = "";
      $this->inq = "";
      $this->outq = "";

    }
  }


  /**
   * Get the value of inq
   */ 
  public function getInq()
  {
    return $this->inq;
  }

  /**
   * Set the value of inq
   *
   * @return  self
   */ 
  public function setInq($inq)
  {
    $this->inq = $inq;

    return $this;
  }

  /**
   * Get the value of outq
   */ 
  public function getOutq()
  {
    return $this->outq;
  }

  /**
   * Set the value of outq
   *
   * @return  self
   */ 
  public function setOutq($outq)
  {
    $this->outq = $outq;

    return $this;
  }
}



  
  

  


?>    