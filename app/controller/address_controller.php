<?php

require_once(__ROOT__ . "controller/controller.php");

class AddressController extends controller
{
  public function insertAdd()
  {
    $country = $_REQUEST['country'];
    $city = $_REQUEST['city'];
    $district = $_REQUEST['district'];
    $street = $_REQUEST['street'];
    $building = $_REQUEST['building'];
    $postcode = $_REQUEST['postcode']; 

    $this->model->insertAddress($address_id, $country, $city, $district, $street, $building, $postcode);
  }  

  public function editAdd()
  {
    $address_id = $_REQUEST['address_id'];  
    $country = $_REQUEST['country'];
    $city = $_REQUEST['city'];
    $district = $_REQUEST['district'];
    $street = $_REQUEST['street'];
    $building = $_REQUEST['building'];
    $postcode = $_REQUEST['postcode']; 

    $this->model->editAddress($address_id, $country, $city, $district, $street, $building, $postcode);
  }
  
  public function deleteAdd()
  {
    $address_id = $_REQUEST ['address_id'];
    $this->model->deleteAddress($address_id);
  }


}
?>