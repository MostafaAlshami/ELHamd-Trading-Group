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
    $address  = $_REQUEST['address'];
    $type = $_REQUEST['type'];

    $this->model->insertCompany($company_name, $email, $url, $phoneNumber, $address, $type);
  }

  public function editComp()
  {
    $company_id = $_REQUEST['company_id'];
    $company_name = $_REQUEST['company_name'];
    $email = $_REQUEST['email'];
    $url = $_REQUEST['url'];
    $phoneNumber = $_REQUEST['phoneNumber'];
    $address  = $_REQUEST['address'];
    $type = $_REQUEST['type'];
    
    $this->model->editCompany($company_id, $company_name, $email, $url, $phoneNumber, $address, $type);
  }

  public function deleteComp($company_id)
  {
    $company_id = $_REQUEST ['company_id'];
    $this->model->getCompany($company_id)->deleteCompany($company_id);
  }
}


?>    