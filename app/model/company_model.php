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
  private $address;  

  function __construct($company_id, $company_name="", $email="", $url="", $phoneNumber="", $type="", $address="")
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
      $this->address = $address;
    }
  }


  function readCompany($company_id)
  {
    $sql = "SELECT company_name, email, url, phoneNumber, address  FROM company WHERE company_id=".$company_id;
    $dbh = $this->connect();
    $result = $dbh->query($sql);

    if($result->num_rows == 1)
    {
      $row = $dbh->fetchRow();
      $this->company_name = $row["company_name"];
      $this->email = $row["email"];
      $this->url = $row["url"];
      $this->phoneNumber = $row["phoneNumber"];
      $this->address = $row["address"];
    }
    else
    {
      $this->company_name = "";
      $this->email = "";
      $this->url = "";
      $this->phoneNumber = "";
      $this->address = "";
      //$this->type = "";
    }

  }



  function getID() {
    return $this->company_id; 
  }
  function setID($company_id) {
    $this->company_id = $company_id;
  }  

  function getName() {
    return $this->company_name; 
  }
  function setName($company_name) {
    $this->company_name = $company_name;
  }  

  function getEmail() {
    return $this->email; 
  }
  function setEmail($email) {
    $this->email = $email;
  }  

  function getURL() {
    return $this->url; 
  }
  function setURL($url) {
    $this->url = $url;
  }  

  function getPhoneNumber() {
    return $this->phoneNumber; 
  }
  function setNumber($phoneNumber) {
    $this->phoneNumber = $phoneNumber;
  } 

  function getType() {
    return $this->type; 
  }
  function setType($type) {
    $this->type = $type;
  } 
  
  function getAddress() {
    return $this->address; 
  }
  function setAddress($address) {
    $this->address = $address;
  }



  function editCompany($company_id, $company_name, $email, $url, $phoneNumber, $address, $type)
  {
    $company_name = $this->dbh->getConn()->real_escape_string($company_name);
    $email = $this->dbh->getConn()->real_escape_string($email);
    $url = $this->dbh->getConn()->real_escape_string($url);
    $phoneNumber = $this->dbh->getConn()->real_escape_string($phoneNumber);
    $address = $this->dbh->getConn()->real_escape_string($address);
    $type = $this->dbh->getConn()->real_escape_string($type);
    //DO WE NEED TO EDIT THE TYPE??

    $sql = "UPDATE company SET company_name = '$company_name', email = '$email',
            url = '$url', phoneNmber = '$phoneNumber', address = 'address',
            type = '$type'
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

  
  function deleteCompany( $company_id)
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