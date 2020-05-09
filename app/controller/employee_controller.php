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
    $dep = $_REQUEST['Dep'];
    $mobile = $_REQUEST['mobile'];
    $DoB = $_REQUEST['DOB'];
    $Degree = $_REQUEST['degree'];
    $EmpDate = $_REQUEST['emp_date'];
    $Salary = $_REQUEST['salary'];
    $compid = $_REQUEST['comp_id'];


    $this->model->insertEmployee($first_name, $last_name,$email,$address,$dep,$mobile,$DoB,$Degree,$EmpDate,$Salary,$compid);
  }  
  
  public function editEmp()
  {
    $id = $_REQUEST['empid'];
    $empfirstname = $_REQUEST['empfirstname'];
    $last_name = $_REQUEST['emplastname'];
    $email = $_REQUEST['email'];
    $address = $_REQUEST['address'];
    $mobile = $_REQUEST['mobile'];
    $Degree = $_REQUEST['edudegree'];
    $dob = $_REQUEST['DOB'];
    $EmpDate = $_REQUEST['empdate'];
    $Salary = $_REQUEST['salaryy'];
    $compid = $_REQUEST['compid'];

    $this->model->editEmployee($id,$empfirstname,$last_name,$email,$address,$mobile,$dob,$Degree,$EmpDate,$Salary,$compid);
  }

  public function deleteEmp() 
  {
  $id = $_REQUEST['ID'];
  $this->model->deleteEmployee($id);
  }
  
}