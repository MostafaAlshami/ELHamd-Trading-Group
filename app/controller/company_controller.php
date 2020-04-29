<?php

require_once(__ROOT__ . "controller/controller.php");

class AddressController extends controller
{
  public function insertComp()
  {
    //$company_id = $_REQUEST[''];
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $url = $_REQUEST['url'];
    $phoneNumber = $_REQUEST['phoneNumber'];
    //$address  = $_REQUEST[''];
    //$type = $_REQUEST[''];

    $this->model->insertCompany($name, $email, $url, $phoneNumber);
  }

  public function editComp(company_id)
  {
    $company_id = $_REQUEST[''];
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $url = $_REQUEST['url'];
    $phoneNumber = $_REQUEST['phoneNumber'];
    //$address  = $_REQUEST['address'];
    //$type = $_REQUEST['type'];

    $this->model->editCompany($company_id, $name, $email, $url, $phoneNumber);
  }

  public function deleteComp()
  {
    $company_id = $_REQUEST ['company_id'];
    $this->model->deleteCompany($company_id);
  }


























?>    