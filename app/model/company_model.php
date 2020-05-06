<?php
    require_once(__ROOT__ . "model/model.php");
?>

<?php

class Company extends Model
{
  private $company_id;
  private $company_name; 
  private $type;
  private $email;
  private $url;
  private $phoneNumber;
  private $address;  

  function __construct($company_id, $company_name="", $type="", $email="", $url="", $phoneNumber="", $address="")
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
      $this->type = $type;
      $this->email = $email;
      $this->url = $url;
      $this->phoneNumber = $phoneNumber;
      $this->address = $address;
    }
  }


  function readCompany($company_id)
  {
    $sql = "SELECT *  FROM company WHERE company_id=".$company_id;
    $dbh = $this->connect();
    $result = $dbh->query($sql);

    if($result->num_rows == 1)
    {
      $row = $dbh->fetchRow();
      $this->company_name = $row["company_name"];
      $this->type = $row["type"];
      $this->email = $row["email"];
      $this->url = $row["url"];
      $this->phoneNumber = $row["phoneNumber"];
      $this->address = $row["address"];
    }
    else
    {
      $this->company_name = "";
      $this->type = "";
      $this->email = "";
      $this->url = "";
      $this->phoneNumber = "";
      $this->address = "";
    }

  }



  function getID() {
    return $this->company_id; 
  }
  function setID($company_id) {
    return $this->company_id = $company_id;
  }  

  function getName() {
    return $this->company_name; 
  }
  function setName($company_name) {
    return $this->company_name = $company_name;
  }  

  function getType() {
    return $this->type; 
  }
  function setType($type) {
    return $this->type = $type;
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

  function getAddress() {
    return $this->address; 
  }
  function setAddress($address) {
    return $this->address = $address;
  }



  function editCompany($company_id, $type, $company_name, $email, $url, $phoneNumber, $address)
  {
    $company_name = $this->dbh->getConn()->real_escape_string($company_name);
    $type = $this->dbh->getConn()->real_escape_string($type); //DO WE NEED TO EDIT THE TYPE??
    $email = $this->dbh->getConn()->real_escape_string($email);
    $url = $this->dbh->getConn()->real_escape_string($url);
    $phoneNumber = $this->dbh->getConn()->real_escape_string($phoneNumber);
    $address = $this->dbh->getConn()->real_escape_string($address);


    $sql = "UPDATE company SET company_name = '$company_name',type = '$type', email = '$email',
            url = '$url', phoneNmber = '$phoneNumber', address = 'address',      
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