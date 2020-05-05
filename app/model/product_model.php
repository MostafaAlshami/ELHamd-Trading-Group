<?php
  require_once(__ROOT__ . "model/model.php");
?>

<?php

class Product extends Model 
{
  private $prid;
  private $prname;
  private $prorigin;
  private $prdesc;
  private $prstorage;

 
  public function getPrid()
  {
    return $this->prid;
  }

  /**
   * Set the value of prid
   *
   * @return  self
   */ 
  public function setPrid($prid)
  {
    $this->prid = $prid;

    return $this;
  }
   /**
   * Get the value of prname
   */ 
  public function getPrname()
  {
    return $this->prname;
  }

  /**
   * Set the value of prname
   *
   * @return  self
   */ 
  public function setPrname($prname)
  {
    $this->prname = $prname;

    return $this;
  }
  
  /**
   * Get the value of prorigin
   */ 
  public function getProrigin()
  {
    return $this->prorigin;
  }

  /**
   * Set the value of prorigin
   *
   * @return  self
   */ 
  public function setProrigin($prorigin)
  {
    $this->prorigin = $prorigin;

    return $this;
  }

  /**
   * Get the value of prdesc
   */ 
  public function getPrdesc()
  {
    return $this->prdesc;
  }

  /**
   * Set the value of prdesc
   *
   * @return  self
   */ 
  public function setPrdesc($prdesc)
  {
    $this->prdesc = $prdesc;

    return $this;
  }

  /**
   * Get the value of prstorage
   */ 
  public function getPrstorage()
  {
    return $this->prstorage;
  }

  /**
   * Set the value of prstorage
   *
   * @return  self
   */ 
  public function setPrstorage($prstorage)
  {
    $this->prstorage = $prstorage;

    return $this;
  }
  }


}

  function __construct($prid, $prname="", $prorigin="", $prdesc="", $prstorage="")
  {
    $this->prid = $prid;   
    $this->db = $this->connect();

    if("" === $prname)
    {
      $this->readProduct($prid);
    }
    else
    {
      $this->prorigin = $prorigin;
      $this->prdesc = $prdesc;
      $this->prstorage = $prstorage;
    }
  }

  
  function readProduct($prid)
  {
    $sql = "SELECT * FROM product where ID =" .$prid;
    $db = $this->connect();
    $result = $db->query($sql);

    if($result->num_rows == 1)
    {
      $row = $db->fetchRow();
      $this->prid = $row["ID"];
      $this->prname = $row["name"];
      $this->prdesc = $row["description"];
      $this->prorigin = $row["origin"];
    
    }
    else
    {
      $this->prid = "";
      $this->prname = "";
      $this->prdesc = "";
      $this->prorigin = "";
    }
  }


?>    