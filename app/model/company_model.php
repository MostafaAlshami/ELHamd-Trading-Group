<?php
    require_once(__ROOT__ . "model/model.php");
?>

<?php

class Company extends model
{
  private $company_id;
  private $company_name;
  private $email;
  private $url;
  private $phoneNumber;
  private $type;
  //private $address;  


  function __construct($company_id, $company_name="", $email="", $url="", $phoneNumber="", $type=""/*, $address=""*/)
  {
    $this->company_id = $company_id   
    $this->db = $this->connect();

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


  function get() {
    return $this->company_id; 
  }
  function set($company_id) {
    return $this->company_id = $company_id;
  }

  function get() {
    return $this->company_name; 
  }
  function set($company_name) {
    return $this->company_name = $company_name;
  }  

  function get() {
    return $this->email; 
  }
  function set($email) {
    return $this->email = $email;
  }  

  function get() {
    return $this->url; 
  }
  function set($url) {
    return $this->url = $url;
  }  

  function get() {
    return $this->phoneNumber; 
  }
  function set($phoneNumber) {
    return $this->phoneNumber = $phoneNumber;
  } 

  function get() {
    return $this->type; 
  }
  function set($type) {
    return $this->type = $type;
  } 
  
  /*function get() {
    return $this->address; 
  }
  function set($address) {
    return $this->address = $address;
  } */

  


  function readCompany()
  {
    $sql = "SELECT * FROM company WHERE company_id=" .$company_id;
    $db = $this->connect;
    $result = $db->query($sql);

    if($result->num_rows == 1)
    {
      $row = $db->fetchRow();
      $this->company_name = $row["company_name"];
      $this->email = $row["email"];
      $this->url = $row["url"];
      $this->phoneNumber = $row["phoneNumber"];
      $this->type = $row["type"];
      //address
    }
    else
    {
      $this->company_name = "";
      $this->email = "";
      $this->url = "";
      $this->phoneNumber = "";
      $this->type = "";
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