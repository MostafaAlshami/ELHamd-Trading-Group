<?php

require_once(__ROOT__ . "controller/controller.php");

class EmployeeController extends Controller
{
    public function insertEmp()
  {
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    //$dep = $_POST['Dep'];
    $mobile = $_POST['phoneno'];
    $DoB = $_POST['birthdate'];
    $Degree = $_POST['edudegree'];
    $EmpDate = $_POST['empdate'];
    $Salary = $_POST['salary'];
    $compid = $_POST['code'];
    $nationalid = $_POST['national'];



    $this->model->insertEmployee($first_name, $last_name,$email,$address,$mobile,$DoB,$Degree,$EmpDate,$Salary,$compid,$nationalid);
  }  
  
  public function editEmp()
  {
    $id = $_GET['id'];
    $empfirstname = $_POST['empfirstname'];
    $last_name = $_POST['emplastname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $Degree = $_POST['edudegree'];
    $dob = $_POST['DOB'];
    $EmpDate = $_POST['empdate'];
    $Salary = $_POST['salaryy'];
    $compid = $_POST['compid'];
    $nationalid = $_POST['national'];

    $this->model->editEmployee($id,$empfirstname,$last_name,$email,$address,$mobile,$dob,$Degree,$EmpDate,$Salary,$compid,$nationalid);
  }

  public function deleteEmp() 
  {
  $id = $_GET['id'];
  $this->model->deleteEmployee($id);
  }
  
}