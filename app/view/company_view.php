<?php
require_once(__ROOT__ . "view/view.php");

class CompanyView extends View
{

    public function output()
    {
        $str = "";

        $str.=' <div class="table-responsive"> <table class="table"> ';
        
        $str.=' <thead class=" text-primary"> ';
        $str.=" <th> ".$this->model->getName()." </th> <th></th><th></th> ";   
        $str.=' <th class="text-right"></th> </thead> ';
       
        $str.=" <tbody> ";
       
        $str.=" <tr> ";
        $str.=" <td> Address </td> <td></td> <td></td> ";      
        $str.=" <td>".$this->model->getAddress()." </td> </tr> ";     
     
        $str.=" <tr>";
        $str.=" <td> Email Address </td> <td></td> <td></td> ";        
        $str.=" <td>".$this->model->getEmail()." </td> </tr> ";   
       
        $str.=" <tr> ";
        $str.=" <td> Phone Number </td>  <td></td> <td></td> ";             
        $str.=" <td> ".$this->model->getPhoneNumber()." </td> </tr> ";
       
        $str.=" <tr>";
        $str.=" <td> URL </td>  <td></td> <td></td> ";             
        $str.=" <td> ".$this->model->getURL()." </td> </tr> ";
      
        $str.=" <tr> ";
        $str.=" <td></td> ";
        $str.=' <td> <a class="btn" href=""> View contracts </a> </td> ';  //ACTIION
        $str.=' <td> <a class="btn" href="editCompany.php"> Edit Profile </a> </td> ';    //ACTIION
       
        $str.=" <td></td> </tr> ";
        $str.=" </tbody> </table> ";
        $str.=" </div> ";

        return $str;
    }


    public function addCard()
    {
        $str = "";

        $str.=' <div class="table-responsive"> <table class="table"> ';
     
        $str.=' <thead class=" text-primary"> ';
        $str.=" <th> Company Name </th> <th></th><th></th> ";    
        $str.=' <th class="text-right"> <input type="text" class="form-control" placeholder=""> </th> </thead> ';
      
        $str.=" <tbody> ";
      
        $str.=" <tr> ";
        $str.=" <td> Address </td> <td></td> <td></td> ";     
        $str.=' <td> <input type="text" class="form-control" placeholder=""> </td> </tr> ';     
       
        $str.=" <tr>";
        $str.=" <td> Email Address </td> <td></td> <td></td> ";        
        $str.=' <td> <input type="text" class="form-control" placeholder=""> </td> </tr> ';   
     
        $str.=" <tr> ";
        $str.=" <td> Phone Number </td>  <td></td> <td></td> ";           
        $str.=' <td> <input type="text" class="form-control" placeholder=""> </td> </tr> ';
      
        $str.=" <tr>";
        $str.=" <td> URL </td>  <td></td> <td></td> ";                
        $str.=' <td> <input type="text" class="form-control" placeholder=""> </td> </tr> ';
      
        $str.=" <tr> ";
        $str.=" <td></td> ";
        $str.=' <td> <button class="btn" href=""> Save </button> </td> ';  //SAVE ACTION
        $str.=' <td> <button class="btn" href=""> Cancel </button> </td> ';  //CANCEL ACTION
        $str.=" <td></td> </tr> ";
      
        $str.=" </tbody> </table> ";
        $str.=" </div> ";

        return $str;
    }



    
    public function editCard()
    {
        $str = "";

        $str.=' <div class="table-responsive"> <table class="table"> ';
       
        $str.=' <thead class=" text-primary"> ';
        $str.=" <th> Company Name </th> <th></th><th></th> ";       
        $str.=' <th class="text-right"> <input type="text" class="form-control" placeholder="'.$this->model->getName().'"> </th> </thead> ';
        
        $str.=" <tbody> ";

        $str.=" <tr> ";
        $str.=" <td> Address </td> <td></td> <td></td> ";     
        $str.=' <td> <input type="text" class="form-control" placeholder="'.$this->model->getAddress().'"> </td> </tr> ';   
       
        $str.=" <tr>";
        $str.=" <td> Email Address </td> <td></td> <td></td> ";        
        $str.=' <td> <input type="text" class="form-control" placeholder="'.$this->model->getEmail().'"> </td> </tr> ';   
       
        $str.=" <tr> ";
        $str.=" <td> Phone Number </td>  <td></td> <td></td> ";          
        $str.=' <td> <input type="text" class="form-control" placeholder="'.$this->model->getPhoneNumber().'"> </td> </tr> ';
       
        $str.=" <tr>";
        $str.=" <td> URL </td>  <td></td> <td></td> ";             
        $str.=' <td> <input type="text" class="form-control" placeholder="'.$this->model->getURL().'"> </td> </tr> ';
       
        $str.=" <tr> ";
        $str.=" <td></td> ";
        $str.=' <td> <button class="btn" href=""> Save </button> </td> ';  //SAVE ACTION
        $str.=' <td> <button class="btn" href=""> Delete </button> </td> ';  //DELETE ACTION
        $str.=" <td></td> </tr> ";
       
        $str.=" </tbody> </table> ";
        $str.=" </div> ";

        return $str;
    }


  //<a class="btn" href=" ">   </a>

}

?>
    