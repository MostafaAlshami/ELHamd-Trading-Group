<?php

require_once(__ROOT__ . "controller/controller.php");

class AddressController extends controller
{
  public function insertComp()
  {
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $url = $_REQUEST['url'];
    $phoneNumber = $_REQUEST['phoneNumber'];
    $type = $_REQUEST['type'];
    //$address  = $_REQUEST[''];

    $this->model->insertCompany($name, $email, $url, $phoneNumber, $type);
  }

  public function editComp(company_id)
  {
    $company_id = $_REQUEST[''];
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $url = $_REQUEST['url'];
    $phoneNumber = $_REQUEST['phoneNumber'];
    $type = $_REQUEST['type'];
    //$address  = $_REQUEST[''];

    $this->model->editCompany($company_id, $name, $email, $url, $phoneNumber, $type);
  }

  public function deleteComp()
  {
    $company_id = $_REQUEST ['company_id'];
    $this->model->deleteCompany($company_id);
  }


























?>    