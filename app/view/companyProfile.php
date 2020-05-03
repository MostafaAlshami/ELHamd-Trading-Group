<?php
require_once(__ROOT__ . "view/View.php");

class CompanyProfile extends View
{

    public function output()
    {
        $str = "";

        $str.=' <div class="table-responsive"> ';
        $str.=' <table class="table"> ';
        $str.=' <thead class=" text-primary"> ';
        $str.=" <th> ".$this->model->getName()." </th> ";   //HERE
        $str.=" <th></th><th></th> ";        
        $str.=' <th class="text-right"></th> ';
        $str.=" </thead> ";
        $str.=" <tbody> ";
        $str.=" <tr> ";
        $str.=" <td>      Address                   </td> ";      //HERE Address
        $str.=" <td></td><td></td> ";
        $str.=" <td>       Cai                      </td> ";        //HERE Address
        $str.=" </tr>";
        $str.=" <tr>";
        $str.=" <td>    Email Address               </td> ";        //HERE 
        $str.=" <td></td><td></td>    ";
        $str.=" <td>".$this->model->getEmail()." </td> ";
        $str.=" </tr> ";
        $str.=" <tr> ";
        $str.=" <td>      Phone Number              </td>  ";             //HERE
        $str.=" <td></td>   ";
        $str.=" <td></td> ";
        $str.=" <td> ".$this->model->getPhoneNumber()." </td>   ";
        $str.=" </tr>";
        $str.=" <tr>";
        $str.=" <td>         URL                    </td>  ";                //HERE
        $str.=" <td></td><td></td>   ";
        $str.=" <td> ".$this->model->getURL()." </td>   ";
        $str.=" </tr> ";
        $str.=" <tr> ";
        $str.=" <td></td> ";
        $str.=' <td><button class=" btn">View Contracts</button></td> ';
        $str.=' <td><button class=" btn">Edit Profile</button></td> ';
        $str.=" <td></td> ";
        $str.=" </tr> ";
        $str.=" </tbody> ";
        $str.=" </table> ";
        $str.=" </div> ";


        return $str;
    }
}

?>
    