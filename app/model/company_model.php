<?php
    require_once(__ROOT__ . "model/model.php");
?>

<?php

class Company extends Model
{
  private $company_id;
  private $company_name;
  private $email;
  private $url;
  private $phoneNumber;
  private $type;
  //private $address;  


  /*function __construct()
  {
    $this->company_id = "";  
    $this->company_name = ""; 
    $this->email = ""; 
    $this->url = ""; 
    $this->phoneNumber = ""; 
    $this->type = ""; 
  }*/


  function __construct($company_id, $company_name="", $email="", $url="", $phoneNumber="", $type=""/*, $address=""*/)
  {
    $this->company_id = $company_id;   
    $this->dbh = $this->connect();

    if("" === $company_name)
    {
      $this->readCompany($company_id);
    }
    else
    {
      $this->company_name = $company_name;
      $this->email = $email;
      $this->url = $url;
      $this->phoneNumber = $phoneNumber;
      $this->type = $type;
      //$this->address = $address;
    }
  }


  function getName() {
    return $this->company_name; 
  }
  function setName($company_name) {
    return $this->company_name = $company_name;
  }  

  function getEmail() {
    return $this->email; 
  }
  function setEmail($email) {
    return $this->email = $email;
  }  

  function getURL() {
    return $this->url; 
  }
  function setURL($url) {
    return $this->url = $url;
  }  

  function getPhoneNumber() {
    return $this->phoneNumber; 
  }
  function setNumber($phoneNumber) {
    return $this->phoneNumber = $phoneNumber;
  } 

  function getType() {
    return $this->type; 
  }
  function setType($type) {
    return $this->type = $type;
  } 
  
  /*function get() {
    return $this->address; 
  }
  function set($address) {
    return $this->address = $address;
  } */

  
    //Problem in  line 97 and 101

  function readCompany()
  {
    $sql = "SELECT company_name, email, url, phoneNumber  FROM company WHERE company_id=".$company_id;
    $dbh = $this->connect();
    $result = $dbh->query($sql);

    if($result->num_rows == 1)
    {
      $row = $dbh->fetchRow();
      $this->company_name = $row["company_name"];
      $this->email = $row["email"];
      $this->url = $row["url"];
      $this->phoneNumber = $row["phoneNumber"];
      //$this->type = $row["type"];
      //address
    }
    else
    {
      $this->company_name = "";
      $this->email = "";
      $this->url = "";
      $this->phoneNumber = "";
      //$this->type = "";
      //address
    }


  }


  function insertCompany()
  {
    $company_name = $this->dbh->getConn()->real_escape_string($company_name);
    $email = $this->dbh->getConn()->real_escape_string($email);
    $url = $this->dbh->getConn()->real_escape_string($url);
    $phoneNumber = $this->dbh->getConn()->real_escape_string($phoneNumber);
    $type = $this->dbh->getConn()->real_escape_string($type);
    //address

    $sql = "INSERT INTO company (company_name, email, url, phoneNumber, type)
            VALUES ('$company_name', '$email', '$url', '$phoneNumber', '$type')";
    
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


  function editCompany($company_id, $company_name, $email, $url, $phoneNumber, $type /*,address*/)
  {
    $company_name = $this->dbh->getConn()->real_escape_string($company_name);
    $email = $this->dbh->getConn()->real_escape_string($email);
    $url = $this->dbh->getConn()->real_escape_string($url);
    $phoneNumber = $this->dbh->getConn()->real_escape_string($phoneNumber);
    $type = $this->dbh->getConn()->real_escape_string($type);
    //address

    $sql = "UPDATE company SET company_name = '$company_name', email = '$email',
            url = '$url', phoneNmber = '$phoneNumber', type = '$type'
            WHERE company_id = $company_id";

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

  
  function deleteCompany()
  {
    $sql = "DELETE FROM company WHERE Ccompany_id = $company_id";

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