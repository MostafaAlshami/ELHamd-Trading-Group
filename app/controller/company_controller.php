<?php

require_once(__ROOT__ . "controller/controller.php");

class CompanyController extends Controller
{
  public function insertComp()
  {
    $company_name = $_POST['company_name'];
    $type = $_POST['type'];
    $email = $_POST['email'];
    $url = $_POST['url'];
    $phoneNumber = $_POST['phoneNumber'];
    $address  = $_POST['address'];

    $this->model->insertCompany($company_name, $type, $email, $url, $phoneNumber, $address);
  }


  public function editComp()
  {
    $company_id = $_GET['id'];
    $type =$_POST['type'];
    //$type = "test";
    $company_name = $_POST['company_name'];
    $email = $_POST['email'];
    $url = $_POST['url'];
    $phoneNumber = $_POST['phoneNumber'];
    $address  = $_POST['address'];

    $this->model->editCompany($company_id, $type, $company_name, $email, $url, $phoneNumber, $address);
  }


  public function deleteComp()
  {
    $company_id = $_GET['id'];
    $this->model->deleteCompany($company_id);
  }
  
  public function searchComp()
  {
    $company_name = "Elhamd";
    $company_name = $_POST["value"];
    $this->model->searchCompany($company_name);
  }
}
