<?php
require_once(__ROOT__ . "view/view.php");

class CompaniesView extends View
{
    public function output()
    {
        $str = "";

        

        $str.=' <div class="table-responsive"> <table class="table"> ';
        $str.=' <thead class=" text-primary"> ';
        $str.=' <th> Comapny </th> ';  
        $str.=' <th> Email </th> ';
        $str.=' <th> Phone Number </th> ';
        $str.=' <th> Website </th> ';
        $str.=' <th> Address </th> ';
        $str.=' <th class="text-right"> </th> ';
        $str.=' </thead> <tbody> ';

        foreach($this->model->getComapnies() as $Company)
        {
            $str.=' <tr>';
            $str.=' <td>  '.$Company->getName().'  </td> ';
            $str.=' <td>  '.$Company->getEmail().'  </td> ';
            $str.=' <td>  '.$Company->getPhoneNumber().'  </td> ';
            $str.=' <td>  '.$Company->getURL().'  </td> ';
            $str.=' <td>  '.$Company->getAddress().'  </td> ';
            $str.=' <td class="text-right"><a class="btn" href="CompanyProfile.php"> Edit </a></td> ';   //check href
            $str.=' </tr> ';
        }

        /*<input type="text" name="Comapny_name" placeholder=" "/>*/
        

        $str.=' <tr>';
        $str.='<form action="companies_model.php?action=insert" method="post">';
        $str.=' <td> <input type="email" class="form-control" placeholder=""> </td> ';
        $str.=' <td> <input type="email" class="form-control" placeholder=""> </td> ';
        $str.=' <td> <input type="email" class="form-control" placeholder=""> </td> ';
        $str.=' <td> <input type="email" class="form-control" placeholder=""> </td> ';
        $str.=' <td> <input type="email" class="form-control" placeholder=""> </td> ';

        //ACTION??
        $str.=' <td  class="text-right"> <button class=" btn" type="submit" formaction=" "> Add </button> </td>';
                      
        //$str.="<td><input type='submit' value='insert'/></td>";

        $str.="</form>";
        $str.=' </tr> ';
        

        $str.=' </tbody> ';
        $str.=' </table> ';
       // $str.=' <button class=" btn">Add Company</button> '; //ADD COMPANY ACTION HERE
        $str.=' </div> ';
  

        return $str;
    }

}    
?>

