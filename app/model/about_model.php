<?php
require_once(__ROOT__ . "model/model.php");

?>

<?php

  class About extends Model
  {
    private $id;
    private $intro;
    private $info;
    private $extra;
    private $pic1;
    private $pic2;

    function __construct($id, $intro="" ,$info="", $extra="" ,$pic1="", $pic2="")
    {
        $this->id = $id;
        $this->dbh = $this->connect();
    
        if ("" === $intro) 
        {
          $this->readAbout($id);
        }
        else 
        {
          $this->intro = $intro;
          $this->info = $info;
          $this->extra = $extra;
          $this->pic1 = $pic1;
          $this->pic2 = $pic2;
        }
    }

    function readAbout($id)
    {
        $sql = "SELECT * FROM about WHERE id=" . $id;
        $dbh = $this->connect();
        $result = $dbh->query($sql);

        if ($result->num_rows == 1) 
        {
           $row = $dbh->fetchRow();
           $this->intro = $row["intro"];
           $this->info = $row["info"];
           $this->extra = $row["extra"];
           $this->pic1 = $row["pic1"];
           $this->pic2 = $row["pic2"];
        }
        else
        {
            $this->intro = "";
            $this->info = "";
            $this->extra = "";
            $this->pic1 = "";
            $this->pic2 = "";
        }
    }

    function getID()
    {
      return $this->id;
    }
    function setID($id)
    {
      return $this->id = $id;
    }

    function getIntro()
    {
      return $this->intro;
    }
    function setIntro($intro)
    {
      return $this->intro = $intro;
    }

    function getInfo()
    {
      return $this->info;
    }
    function setInfo($info)
    {
      return $this->info = $info;
    }

    function getExtra()
    {
      return $this->extra;
    }
    function setExtra($extra)
    {
      return $this->extra = $extra;
    }

    function getPic1()
    {
      return $this->pic1;
    }
    function setPic1($pic1)
    {
      return $this->pic1 = $pic1;
    }

    function getPic2()
    {
      return $this->pic2;
    }
    function setPic2($pic2)
    {
      return $this->pic2 = $pic2;
    }

    function insertAbout()
    {

    }

    function editAbout()
    {
        
    }

    function deleteAbout()
    {
        
    }

  }
?>    
