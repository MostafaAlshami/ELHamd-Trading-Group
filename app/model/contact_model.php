<?php
require_once(__ROOT__ . "model/model.php");

?>

<?php

  class Contact extends Model
  {
    private $id;
    private $compAdd;
    private $compTel;
    private $compMobile;
    private $compFax;
    private $email;
    private $website;
    private $compName;
    private $facName;
    private $facAdd;
    private $facTel;
    private $facMobile;
    private $facFax;

    function __construct($id, $compAdd="" ,$compTel="", $compMobile="" ,$compFax="", $email="",
                        $website="" ,$compName="", $facName="" ,$facAdd="", $facTel="" ,
                        $facMobile="", $facFax="")
    {
        $this->id = $id;
        $this->dbh = $this->connect();
    
        if ("" === $compAdd) 
        {
          $this->readContact($id);
        }
        else 
        {
          $this->compAdd = $compAdd;
          $this->compTel = $compTel;
          $this->compMobile = $compMobile;
          $this->compFax = $compFax;
          $this->email = $email;
          $this->website = $website;
          $this->compName = $compName;
          $this->facName = $facName;
          $this->facAdd = $facAdd;
          $this->facTel = $facTel;
          $this->facMobile = $facMobile;
          $this->facFax = $facFax;
        }
    }


    function readContact($id)
    {
        $sql = "SELECT * FROM contact WHERE id=" . $id;
        $dbh = $this->connect();
        $result = $dbh->query($sql);

        if ($result->num_rows == 1) 
        {
           $row = $dbh->fetchRow();
           $this->compAdd = $row["compAdd"];
           $this->compTel = $row["compTel"];
           $this->compMobile = $row["compMobile"];
           $this->compFax = $row["compFax"];
           $this->email = $row["email"];
           $this->website = $row["website"];
           $this->compName = $row["compName"];
           $this->facName = $row["facName"];
           $this->facAdd = $row["facAdd"];
           $this->facTel = $row["facTel"];
           $this->facMobile = $row["facMobile"];
           $this->facFax = $row["facFax"];
        }
        else
        {
            $this->compAdd = "";
            $this->compTel = "";
            $this->compMobile = "";
            $this->compFax = "";
            $this->email = "";
            $this->website = "";
            $this->compName = "";
            $this->facName = "";
            $this->facAdd = "";
            $this->facTel = "";
            $this->facMobile = "";
            $this->facFax = "";
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

    function getCompAdd()
    {
      return $this->compAdd;
    }
    function getCompAdd($)
    {
      return $this->compAdd = $compAdd;
    }

    function getCompTel()
    {
      return $this->compTel;
    }
    function setCompTel($compTel)
    {
      return $this->compTel = $compTel;
    }

    function getCompMobile()
    {
      return $this->compMobile;
    }
    function setCompMobile($compMobile)
    {
      return $this->compMobile = $compMobile;
    }

    function getCompFax()
    {
      return $this->compFax;
    }
    function setCompFax($compFax)
    {
      return $this->compFax = $compFax;
    }

    function getEmail()
    {
      return $this->email;
    }
    function setEmail($email)
    {
      return $this->email = $email;
    }

    function getWebsite()
    {
      return $this->website;
    }
    function setWebsite($website)
    {
      return $this->website = $website;
    }

    function getCompName()
    {
      return $this->compName;
    }
    function setCompName($compName)
    {
      return $this->compName = $compName;
    }

    function getFacName()
    {
      return $this->facName;
    }
    function setFacName($facName)
    {
      return $this->facName = $facName;
    }

    function getFacAdd()
    {
      return $this->facAdd;
    }
    function setFacAdd($facAdd)
    {
      return $this->facAdd = $facAdd;
    }


    function getFacTel()
    {
      return $this->facTel;
    }
    function setFacTel($facTel)
    {
      return $this->facTel = $facTel;
    }

    function getFacMobile()
    {
      return $this->facMobile;
    }
    function setFacMobile($facMobile)
    {
      return $this->facMobile = $facMobile;
    }


    function getFacFax()
    {
      return $this->facFax;
    }
    function setFacFax($facFax)
    {
      return $this->facFax = $facFax;
    }

    }


    function insertContact()
    {

    }

    function editContact()
    {
        
    }

    function deleteContact()
    {
        
    }






  }


?>  