<?php
  require_once(__ROOT__ . "model/Model.php");
?>

<?php

class Address extends Model 
{
  private $address_id;
  private $country;
  private $city;
  private $district;
  private $street;
  private $building;
  private $postcode;

  function __construct($address_id, $country="", $city="", $district="", $street="", $building="", $postcode="")
  {
    $this->address_id = $address_id   
    $this->db = $this->connect();

    if("" === $country)
    {
      $this->readAddress($address_id);
    }
    else
    {
      $this->country = $country;
      $this->city = $city;
      $this->district = $district;
      $this->street = $street;
      $this->building = $building;
      $this->postcode = $postcode;
    }
  }

  function getAddressID() {
    return $this->address_id; 
  }
  function setAddressID($address_id) {
    return $this->address_id = $address_id;
  }

  function getCountry() {
    return $this->country; 
  }
  function setCountry($country) {
    return $this->country = $country;
  }

  function getCity() {
    return $this->city;
  }
  function setCity($city){
    return $this->city = $city;
    }

  function getDistrict() {
     return $this->district;
  }
  function setDistrict($district){
    return $this->district = $district;
  }

  function getStreet() {
    return $this->street;
  }
  function setStreet($street){
    return $this->street = $street;
  } 

  function getBuilding() {
    return $this->building;
  }
  function setBuilding($building){
    return $this->building = $building;
  }

  function getPostcode() {
    return $this->postcode;
  }
  function setPostcode($postcode){
    return $this->postcode = $postcode;
  }

  function readAddress($address_id)
  {
    $sql = "SELECT * FROM address where ID =" .$address_id;
    $db = $this->connect();
    $result = $db->query($sql);

    if($result->num_rows == 1)
    {
      $row = $db->fetchRow();
      $this->country = $row["country"];
      $this->city = $row["city"];
      $this->district = $row["district"];
      $this->street = $row["street"];
      $this->building = $row["building"];
      $this->postcode = $row["postcode"];
    }
    else
    {
      $this->country = "";
      $this->city = "";
      $this->district = "";
      $this->street = "";
      $this->building = "";
      $this->postcode = "";
    }
  }

  function insertAddress($address_id, $country, $city, $district, $street, $building, $postcode)
  {
    $country = $this->dbh->getConn()->real_escape_string($country);
    $city = $this->dbh->getConn()->real_escape_string($city);
    $district = $this->dbh->getConn()->real_escape_string($district);
    $street = $this->dbh->getConn()->real_escape_string($street);
    $building = $this->dbh->getConn()->real_escape_string($building);
    $postcode = $this->dbh->getConn()->real_escape_string($postcode);

    $sql = "INSERT INTO address (country, city, district, street, building, postcode) 
            VALUES ('$country', '$city', '$district', '$street', '$building', '$postcode')";
       
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
  }


  function editAddress($address_id, $country, $city, $district, $street, $building, $postcode)
  {
    $country = $this->dbh->getConn()->real_escape_string($country);
    $city = $this->dbh->getConn()->real_escape_string($city);
    $district = $this->dbh->getConn()->real_escape_string($district);
    $street = $this->dbh->getConn()->real_escape_string($street);
    $building = $this->dbh->getConn()->real_escape_string($building);
    $postcode = $this->dbh->getConn()->real_escape_string($postcode);

   $sql = "UPDATE address SET country = '$country', city = '$city', district = '$district',
                              street = '$street', building = '$building', postcode = '$postcode'  WHERE ID = $address_id"; 

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


  function deleteAddress($address_id)
  {
    $sql="DELETE FROM address WHERE ID = $address_id";
       
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