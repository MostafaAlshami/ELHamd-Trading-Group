<?php
require_once(__ROOT__ . "view/view.php");

class CompanyView extends View
{
    //edit strings

    public function companyForm()
    {
        $str = "";

        $str.=' <div class="table-responsive"> <table class="table"> ';
        $str.=' <thead class=" text-primary"> ';
        $str.=" <th> Company Name </th> <th></th><th></th> ";   //HERE      
        $str.=' <th class="text-right"> <input type="text" class="form-control" placeholder=""> </th> </thead> ';
        $str.=" <tbody> ";
        $str.=" <tr> ";
        $str.=" <td>      Address                  </td> <td></td> <td></td> ";      //HERE Address
        $str.=' <td> <input type="text" class="form-control" placeholder=""> </td> </tr> ';     //HERE Address
        $str.=" <tr>";
        $str.=" <td>    Email Address              </td> <td></td> <td></td> ";        //HERE 
        $str.=' <td> <input type="text" class="form-control" placeholder=""> </td> </tr> ';   
        $str.=" <tr> ";
        $str.=" <td>      Phone Number             </td>  <td></td> <td></td> ";             //HERE
        $str.=' <td> <input type="text" class="form-control" placeholder=""> </td> </tr> ';
        $str.=" <tr>";
        $str.=" <td>         URL                   </td>  <td></td> <td></td> ";                //HERE
        $str.=' <td> <input type="text" class="form-control" placeholder=""> </td> </tr> ';
        $str.=" <tr> ";
        $str.=" <td></td> ";
        $str.=' <td> <button class=" btn">Save</button> </td> ';
        $str.=' <td> <button class=" btn">Delete</button> </td> ';
        $str.=" <td></td> </tr> ";
        $str.=" </tbody> </table> ";
        $str.=" </div> ";


        return $str;
    }



    public function output()
    {
        $str = "";

        $str.=' <div class="table-responsive"> <table class="table"> ';
        $str.=' <thead class=" text-primary"> ';
        $str.=" <th> ".$this->model->getName()." </th> <th></th><th></th> ";   //HERE      
        $str.=' <th class="text-right"></th> </thead> ';
        $str.=" <tbody> ";
        $str.=" <tr> ";
        $str.=" <td>      Address                  </td> <td></td> <td></td> ";      //HERE Address
        $str.=" <td>".$this->model->getAddress()." </td> </tr> ";     //HERE Address
        $str.=" <tr>";
        $str.=" <td>    Email Address              </td> <td></td> <td></td> ";        //HERE 
        $str.=" <td>".$this->model->getEmail()." </td> </tr> ";   
        $str.=" <tr> ";
        $str.=" <td>      Phone Number             </td>  <td></td> <td></td> ";             //HERE
        $str.=" <td> ".$this->model->getPhoneNumber()." </td> </tr> ";
        $str.=" <tr>";
        $str.=" <td>         URL                   </td>  <td></td> <td></td> ";                //HERE
        $str.=" <td> ".$this->model->getURL()." </td> </tr> ";
        $str.=" <tr> ";
        $str.=" <td></td> ";
        $str.=' <td><button class=" btn">View Contracts</button></td> ';
        $str.=' <td><button class=" btn">Edit Profile</button></td> ';
        $str.=" <td></td> </tr> ";
        $str.=" </tbody> </table> ";
        $str.=" </div> ";


        return $str;
    }
}

?>
    