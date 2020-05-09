<?php
require_once(__ROOT__ . "view/view.php");
require_once(__ROOT__ . "model/Employees_model.php");
require_once(__ROOT__ . "model/Employee_model.php");


class EmployeeView extends View
{

  public function output()
  {   
    $str="";

    $str .= '<div class="card-header">';
    $str .= '<h5 class="card-category"> Employees </h5>';
    $str .= '<h4 class="card-title"> '.$this->model->getEmpfirstname().'  '.$this->model->getEmplastname().' </h4>';
    $str .= '</div>';
    $str .= '<div class="card-body"';


    $str .= ' <div class="table-responsive"> <table class="table"> ';

    $str .= ' <thead class=" text-primary"> ';
    $str .= " <th> Code </th> <th></th> <th></th> ";
    $str .= ' <th class="text-left"> '. $this->model->getCompid() .'</th> </thead> ';

    $str .= " <tbody> ";    
    
    $str .= " <tr>";
    $str .= " <td> Email Address </td> <td></td> <td></td> ";
    $str .= " <td>" . $this->model->getEmail() . " </td> </tr> ";

    $str .= " <tr> ";
    $str .= " <td> Address </td> <td></td> <td></td> ";
    $str .= " <td>" . $this->model->getAddress() . " </td> </tr> ";


    $str .= " <tr> ";
    $str .= " <td> Phone Number </td>  <td></td> <td></td> ";
    $str .= " <td> " . $this->model->getMobile() . " </td> </tr> ";

    $str .= " <tr>";
    $str .= " <td> Educational Degree </td>  <td></td> <td></td> ";
    $str .= " <td> " . $this->model->getEdudegree() . " </td> </tr> ";

    $str .= " <tr>";
    $str .= " <td> Birth Date </td>  <td></td> <td></td> ";
    $str .= " <td> " . $this->model->getBirthdate() . " </td> </tr> ";

    $str .= " <tr>";
    $str .= " <td> Employment Date </td>  <td></td> <td></td> ";
    $str .= " <td> " . $this->model->getEmpdate() . " </td> </tr> ";

    $str .= " <tr>";
    $str .= " <td> Salary </td>  <td></td> <td></td> ";
    $str .= " <td> " . $this->model->getSalary() . " </td> </tr> ";

    $str .= " <tr> ";
    $str .= " <td></td> ";
    $str .= ' <td> <a class="btn" href=""> Edit </a> </td> ';  //ACTIION
    $str .= ' <td> <a class="btn" href="employeesList.php"> Back to Employees </a> </td> ';    //ACTIION

    $str .= " <td></td> </tr> ";
    $str .= " </tbody> </table> ";
    $str .= " </div> ";

    return $str;
  }



  public function editCard()
  {   
    $str="";

    $str .= '<div class="card-header">';
    $str .= ' <form action="" method ="post" > ';
    $str .= '<h4 class="card-title"> '.$this->model->getEmpfirstname().'  '.$this->model->getEmplastname().' </h4>';
    $str .= '</div>';

    $str .= '<div class="card-body"';

    $str .= ' <div class="table-responsive"> <table class="table"> ';

    $str .= ' <thead class=" text-primary"> ';
    $str .= " <th> Code </th> <th></th> <th></th> ";
    $str .= ' <th><input type="text" class="form-control" name="compid" placeholder="" value="'. $this->model->getCompid() .'"></th> </thead> ';

    $str .= " <tbody> ";       
    
    $str .= " <tr>";
    $str .= " <td> First Name </td> <td></td> <td></td> ";
    $str .= ' <td><input type="text" class="form-control" placeholder="" name="empfirstname"  value="'. $this->model->getEmpfirstname() .'"></td> </tr> ';
    
    $str .= " <tr>";
    $str .= " <td> Last Name </td> <td></td> <td></td> ";
    $str .= ' <td><input type="text" class="form-control" placeholder="" name="emplastname" value="'. $this->model->getEmplastname() .'"></td> </tr> ';


    $str .= " <tr>";
    $str .= " <td> Email Address </td> <td></td> <td></td> ";
    $str .= ' <td><input type="email" class="form-control" placeholder="" name="email" value="'. $this->model->getEmail() .'"></td> </tr> ';

 
    $str .= " <tr> ";
    $str .= " <td> Address </td> <td></td> <td></td> ";
    $str .= ' <td><input type="text" class="form-control" placeholder="" name="address" value="'. $this->model->getAddress() .'"></td> </tr> ';


    $str .= " <tr> ";
    $str .= " <td> Phone Number </td>  <td></td> <td></td> ";
    $str .= ' <td><input type="text" class="form-control" placeholder="" name="mobile" value="'. $this->model->getMobile() .'"></td> </tr> ';

    $str .= " <tr>";
    $str .= " <td> Educational Degree </td>  <td></td> <td></td> ";
    $str .= ' <td><input type="text" class="form-control" placeholder="" name="edudegree" value="'. $this->model->getEdudegree() .'"></td> </tr> ';

    $str .= " <tr>";
    $str .= " <td> Birth Date </td>  <td></td> <td></td> ";
    $str .= ' <td><input type="date" class="form-control" placeholder="" name="DOB" value="'. $this->model->getBirthdate() .'"></td> </tr> ';

    $str .= " <tr>";
    $str .= " <td> Employment Date </td>  <td></td> <td></td> ";
    $str .= ' <td><input type="date" class="form-control" placeholder="" name="empdate" value="'. $this->model->getEmpdate() .'"></td> </tr> ';

    $str .= " <tr>";
    $str .= " <td> Salary </td>  <td></td> <td></td> ";
    $str .= ' <td><input type="text" class="form-control" placeholder="" name="salaryy" value="'. $this->model->getSalary() .'"></td> </tr> ';

    $str .= " <tr> ";
    $str .= " <td></td> ";
    $str .= ' <td> <button type="submit" class="btn" name ="save"> Save </button> </td> ';  //SAVE ACTION
        $str .= ' <td> <button class="btn" href=""> Delete </button> </td> ';  //DELETE ACTION
    $str .= ' <td><input type="hidden"  name ="empid" value="' . $this->model->getEmpid() . '"></td> </tr> ';

    $str .= " <td></td> </tr> ";
    $str .= " </tbody> </table> ";
    $str .= " </div> ";
    $str .= " </form> ";


    return $str;
  }



  
  public function addCard()
  {   
    $str="";

    $str .= '<div class="card-header">';
    $str .= '<h5 class="card-category"> Employees </h5>';
    $str .= '<h4 class="card-title"> Add Employee </h4>';
    $str .= '</div>';

    $str .= '<div class="card-body"';

    $str .= ' <div class="table-responsive"> <table class="table"> ';

    $str .= ' <thead class=" text-primary"> ';
    $str .= " <th> Code </th> <th></th> <th></th> ";
    $str .= ' <th><input type="text" class="form-control" placeholder=""></th> </thead> ';

    $str .= " <tbody> ";       
    
    $str .= " <tr>";
    $str .= " <td> First Name </td> <td></td> <td></td> ";
    $str .= ' <td><input type="text" class="form-control" placeholder=""></td> </tr> ';
    
    $str .= " <tr>";
    $str .= " <td> Last Name </td> <td></td> <td></td> ";
    $str .= ' <td><input type="text" class="form-control" placeholder=""></td> </tr> ';


    $str .= " <tr>";
    $str .= " <td> Email Address </td> <td></td> <td></td> ";
    $str .= ' <td><input type="email" class="form-control" placeholder=""></td> </tr> ';

 
    $str .= " <tr> ";
    $str .= " <td> Address </td> <td></td> <td></td> ";
    $str .= ' <td><input type="text" class="form-control" placeholder=""></td> </tr> ';


    $str .= " <tr> ";
    $str .= " <td> Phone Number </td>  <td></td> <td></td> ";
    $str .= ' <td><input type="text" class="form-control" placeholder=""></td> </tr> ';

    $str .= " <tr>";
    $str .= " <td> Educational Degree </td>  <td></td> <td></td> ";
    $str .= ' <td><input type="text" class="form-control" placeholder=""></td> </tr> ';

    $str .= " <tr>";
    $str .= " <td> Birth Date </td>  <td></td> <td></td> ";
    $str .= ' <td><input type="date" class="form-control" placeholder=""></td> </tr> ';

    $str .= " <tr>";
    $str .= " <td> Employment Date </td>  <td></td> <td></td> ";
    $str .= ' <td><input type="date" class="form-control" placeholder=""></td> </tr> ';

    $str .= " <tr>";
    $str .= " <td> Salary </td>  <td></td> <td></td> ";
    $str .= ' <td><input type="text" class="form-control" placeholder=""></td> </tr> ';

    $str .= " <tr> ";
    $str .= " <td></td> ";
    $str .= ' <td> <a class="btn" href=""> Save </a> </td> ';  //ACTIION
    $str .= ' <td> <a class="btn" href="employeesList.php"> Cancel </a> </td> ';    //ACTIION

    $str .= " <td></td> </tr> ";
    $str .= " </tbody> </table> ";
    $str .= " </div> ";

    return $str;
  }


}

?>
    