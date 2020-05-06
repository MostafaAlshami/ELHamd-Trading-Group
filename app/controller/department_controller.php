<?php

require_once(__ROOT__ . "controller/controller.php");

class EmployeeController extends Controller
{
  public function insertEmp()
  {
    $first_name = $_REQUEST['First_Name'];
    $last_name = $_REQUEST['Last_Name'];
    $email = $_REQUEST['email'];
    $address = $_REQUEST['address'];
    $mobile = $_REQUEST['mobile'];
    $DoB = $_REQUEST['DOB'];
    $Degree = $_REQUEST['degree'];
    $EmpDate = $_REQUEST['emp_date'];
    $Salary = $_REQUEST['salary'];


    $this->model->insertEmployee($first_name, $last_name,$email,$address,$mobile,$DoB,$Degree,$EmpDate,$Salary);
  }  
  
  public function editEmp()
  {
    $id = $_REQUEST['ID'];
    $first_name = $_REQUEST['First_Name'];
    $last_name = $_REQUEST['Last_Name'];
    $email = $_REQUEST['email'];
    $address = $_REQUEST['address'];
    $mobile = $_REQUEST['mobile'];
    $DoB = $_REQUEST['DOB'];
    $Degree = $_REQUEST['degree'];
    $EmpDate = $_REQUEST['emp_date'];
    $Salary = $_REQUEST['salary'];

    $this->model->editEmployee($id,$first_name,$last_name,$email,$address,$mobile,$DoB,$Degree,$EmpDate,$Salary);
  }

  public function deleteEmp() 
  {
  $id = $_REQUEST['ID'];
  $this->model->deleteEmployee($id);
  }
  
}