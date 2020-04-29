<?php
    require_once(__ROOT__ . "model/model.php");
?>

<?php

class Company extends model
{
  private $company_id;
  private $name;
  private $email;
  private $url;
  private $phoneNumber;
  //private $address;  
  //private $type;







  function get() {
    return $this->company_id; 
  }
  function set($company_id) {
    return $this->company_id = $company_id;
  }

  function get() {
    return $this->name; 
  }
  function set($name) {
    return $this->name = $name;
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

  /*function get() {
    return $this->address; 
  }
  function set($address) {
    return $this->address = $address;
  } 
  function get() {
    return $this->type; 
  }
  function set($type) {
    return $this->type = $type;
  } 
  */


  
  



  function readCompany()
  {}

  function insertCompany()
  {}

  function editCompany()
  {}

  function deleteCompany()
  {}





}

?>