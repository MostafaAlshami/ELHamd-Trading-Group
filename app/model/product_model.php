<?php
  require_once(__ROOT__ . "model/model.php");
?>

<?php

class Product extends Model 
{
  private $ID;
  private $name;
  private $origin;
  private $description;
  private $pic;


   function __construct($ID, $name="", $description="", $pic="", $origin="")
  {
    $this->ID = $ID;   
    $this->db = $this->connect();

    if(""===$name)
    {
      $this->readProduct($ID);
    }
    else
    {
      $this->origin = $origin;
      $this->description = $description;
      $this->pic = $pic;
    }
  }
  
  public function getID()
  {
    return $this->ID;
  }


  public function setID($ID)
  {
    $this->ID = $ID;

    return $this;
  }

  public function getname()
  {
    return $this->name;
  }

 
  public function setname($name)
  {
    $this->name = $name;

    return $this;
  }
  

  public function getorigin()
  {
    return $this->origin;
  }

  
  public function setorigin($origin)
  {
    $this->origin = $origin;

    return $this;
  }

 
  public function getdescription()
  {
    return $this->description;
  }

  public function setdescription($description)
  {
    $this->description = $description;

    return $this;
  }

  /**
   * Get the value of pic
   */ 
  public function getPic()
  {
    return $this->pic;
  }

  /**
   * Set the value of pic
   *
   * @return  self
   */ 
  public function setPic($pic)
  {
    $this->pic = $pic;

    return $this;
  }

  function readProduct($ID)
  {
    $sql = "SELECT * FROM product where ID =" .$ID;
    $db = $this->connect();
    $result = $db->query($sql); 
    if($result->num_rows == 1)
    {
      $row = $db->fetchRow();
      $this->name = $row["name"];
      $this->description = $row["description"];
      $this->pic = $row["pic"];
      $this->origin = $row["origin"];
    }
    else
    {
      $this->name = "";
      $this->description = "";
      $this->pic = "";
      $this->origin = "";
    }
  }





  
  

  
  }


?>    