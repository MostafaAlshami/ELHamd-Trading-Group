<?php
require_once(__ROOT__ . "view/view.php");
require_once(__ROOT__ . "model/Employees_model.php");
require_once(__ROOT__ . "model/Employee_model.php");


class EmployeeView extends View
{

    public function output()
    {   $str="";
        foreach($this->model->getEmployees() as $employee){
       $str=' <form>
       

                  <div class="row">

                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" placeholder="'.$employee->getEmpfirstname().'" name="fname" >
                      </div>
                    </div>

                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" placeholder="'.$employee->getEmplastname().'" name="lname">
                      </div>
                    </div>

                  </div>



                  <div class="row">

                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" placeholder="'.$employee->getEmail().'" name="emails">
                      </div>
                    </div>

                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Mobile Number</label>
                        <input type="text" class="form-control" placeholder="'.$employee->getMobile().'" name="mobileno" >
                      </div>
                    </div>

                    <div class="col-md-3 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Department</label>
                        <input type="text" class="form-control" placeholder="'.$employee->getDep().'" name="department">
                      </div>
                    </div>
                  </div>


                  <div class="row">

                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" placeholder="'.$employee->getAddress().'" name="address">
                      </div>
                    </div>

                  </div>



                  <div class="row">

                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Birth Date</label>
                        <input type="date" class="form-control" name="birthdate" value="'.$employee->getBirthdate().'">
                      </div>
                    </div>

                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Employment Date</label>
                        <input type="date" class="form-control" name="employdate" value="'.$employee->getEmpdate().'">
                      </div>
                    </div>

                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Salary</label>
                        <input type="Number" class="form-control" placeholder="'.$employee->getSalary().'" name="salary">
                      </div>
                    </div>

                  </div>


                  <div class="row">

                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Educational Degree</label>
                        <input type="text" class="form-control" placeholder="'.$employee->getEdudegree().'" name="degree">
                      </div>
                    </div>

                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Employee code</label>
                        <input type="text" class="form-control" placeholder="'.$employee->getCompid().'" name="empcode">
                      </div>
                    </div>

                  </div>



                  <div class="row">
                    <div class="col-md-12">
                    </div>
                  </div>
                  <a href="editEmployee.html" class="btn">Edit Profile</a>
                  </form>';
        }
        return $str;
    }


}

?>
    