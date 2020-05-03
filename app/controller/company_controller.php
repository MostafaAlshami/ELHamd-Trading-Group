<?php

require_once(__ROOT__ . "controller/controller.php");

class CompanyController extends Controller
{
  public function insertComp()
  {
    $company_name = $_REQUEST['company_name'];
    $email = $_REQUEST['email'];
    $url = $_REQUEST['url'];
    $phoneNumber = $_REQUEST['phoneNumber'];
    $type = $_REQUEST['type'];
    $address  = $_REQUEST['address'];

    $this->model->insertCompany($company_name, $email, $url, $phoneNumber, $type);
  }

  public function editComp()
  {
    $company_id = $_REQUEST['company_id'];
    $company_name = $_REQUEST['company_name'];
    $email = $_REQUEST['email'];
    $url = $_REQUEST['url'];
    $phoneNumber = $_REQUEST['phoneNumber'];
    $type = $_REQUEST['type'];
    $address  = $_REQUEST['address'];

    $this->model->editCompany($company_id, $company_name, $email, $url, $phoneNumber, $type);
  }

  public function deleteComp()
  {
    $company_id = $_REQUEST ['company_id'];
    $this->model->deleteCompany($company_id);
  }
}


?>    