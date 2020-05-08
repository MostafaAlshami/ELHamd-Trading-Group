<?php
require_once(__ROOT__ . "view/View.php");

class Empviewpage extends View{
	
    public function output()
    {
        $str = "";

        $str .= ' <div class="table-responsive"> <table class="table"> ';
        $str .= ' <thead class=" text-primary"> ';
        $str .= ' <th> Name </th> ';
        $str .= ' <th> Email </th> ';
        $str .= ' <th> Mobile Number </th> ';
        $str .= ' <th> Salary </th> ';
        $str .= ' <th class="text-right"> </th> ';
        $str .= ' </thead> <tbody> ';

        foreach ($this->model->getEmployees() as $Employee) {
            $str .= ' <tr>';
            $str .= ' <td>  ' . $Employee->getEmpfirstname() . '  </td> ';
            $str .= ' <td>  ' . $Employee->getEmail() . '  </td> ';
            $str .= ' <td>  ' . $Employee->getMobile() . '  </td> ';
            $str .= ' <td>  ' . $Employee->getSalary() . '  </td> ';
            $str .= " <td class=\"text-right\"><a class=\"btn\" href=''> View </a></td> ";   //check href
            $str .= " <td class=\"text-right\"><a class=\"btn\" href=''> Edit </a></td> ";   //check href
            $str .= ' </tr> ';
        }

        $str .= ' </tbody> ';
        $str .= ' </table> ';
        $str .= ' <a class="btn" href="addEmployee.php"> Add Employee </a> ';
        $str .= ' </div> ';

        return $str;
    }

}
?>

