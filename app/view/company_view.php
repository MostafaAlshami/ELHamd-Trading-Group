<?php
require_once(__ROOT__ . "view/view.php");

class CompanyView extends View
{

    public function output()
    {
        $str = "";

        $str .= ' <div class="table-responsive"> <table class="table"> ';

        $str .= ' <thead class=" text-primary"> ';
        $str .= " <th>   " . $this->model->getName() . " </th> <th></th><th></th> ";
        $str .= ' <th class="text-right"></th> </thead> ';

        $str .= " <tbody> ";

        $str .= " <tr> ";
        $str .= " <td> Address </td> <td></td> <td></td> ";
        $str .= " <td>" . $this->model->getAddress() . " </td> </tr> ";

        $str .= " <tr>";
        $str .= " <td> Email Address </td> <td></td> <td></td> ";
        $str .= " <td> <a href = \"mailto:"  . $this->model->getEmail() . "\" >"  . $this->model->getEmail() . "</a> </td> </tr> ";

        $str .= " <tr> ";
        $str .= " <td> Phone Number </td>  <td></td> <td></td> ";
        $str .= " <td> " . $this->model->getPhoneNumber() . " </td> </tr> ";

        $str .= " <tr>";
        $str .= " <td> URL </td>  <td></td> <td></td> ";
        $str .= " <td> <a href = \"https://"  . $this->model->getURL() . "\" target=\"_blank\" >"  . $this->model->getURL() . "</a> </td> </tr> ";


        $str .= " <tr> ";
        $str .= " <td></td> ";
        $str .= ' <td> <a class="btn" href=""> View contracts </a> </td> ';  //ACTIION
        $str .= " <td class=\"text-right\"><a class=\"btn\" href='companiesList.php?action=edit&id= " . $this->model->getID() . "'  > Edit </a></td> ";   //check href

        $str .= " <td></td> </tr> ";
        $str .= " </tbody> </table> ";
        $str .= " </div> ";

        return $str;
    }


    public function addCard()
    {
        $str = "";
        $str .= ' <form action="" method ="post" > ';
        $str .= ' <div class="table-responsive"> <table class="table"> ';

        $str .= ' <thead class=" text-primary"> ';
        $str .= " <th> Company Name </th> <th></th><th></th> ";
        $str .= ' <th class="text-right"> <input type="text" name ="company_name" id="companyname" class="form-control" value=""> </th> </thead> ';

        $str .= " <tbody> ";

        $str .= " <tr> ";
        $str .= " <td> Address </td> <td></td> <td></td> ";
        $str .= ' <td> <input type="text" name="address" class="form-control" id="address" value=""> </td> </tr> ';

        $str .= " <tr>";
        $str .= " <td> Email Address </td> <td></td> <td></td> ";
        $str .= ' <td> <input type="text" name ="email"class="form-control" id="email" value=""> </td> </tr> ';

        $str .= " <tr> ";
        $str .= " <td> Phone Number </td>  <td></td> <td></td> ";
        $str .= ' <td> <input type="text" name="phoneNumber" class="form-control" id="phone" value=""> </td> </tr> ';

        $str .= " <tr>";
        $str .= " <td> URL </td>  <td></td> <td></td> ";
        $str .= ' <td> <input type="text"name ="url"  class="form-control" id="URL" value=""> </td> </tr> ';

        $str .= " <tr>";
        $str .= " <td> Type </td>  <td></td> <td></td> ";
        $str .= ' <td> <select id="type"name ="type" >
        <option data-display="Choose Branch">Choose Type</option>

        <option value="trading">Trading</option>
        <option value="shipping">Shipping</option>
       
      </select> ';

        $str .= " <tr> ";
        $str .= " <td></td> ";
        $str .= ' <td> <button type="submit" class="btn" name ="savec" onclick="return validateaddcompany()"> Save </button> </td> ';  //SAVE ACTION
        $str .= ' <td> <button class="btn" name="cancel" href="companieslist.php"> Cancel </button> </td> ';  //CANCEL ACTION
        $str .= " <td></td> </tr> ";

        $str .= " </tbody> </table> ";
        $str .= " </div> ";
        $str .= " </form> ";

        return $str;
    }




    public function editCard()
    {
        $str = "";
        $str .= ' <form action="" method ="post" > ';
        $str .= ' <div class="table-responsive"> <table class="table"> ';

        $str .= ' <thead class=" text-primary"> ';
        $str .= " <th> Company Name </th> <th></th><th></th> ";
        $str .= ' <th class="text-right"> <input type="text" class="form-control" name ="company_name" id="companyname2" value="' . $this->model->getName() . '"> </th> </thead> ';

        $str .= " <tbody> ";

        $str .= " <tr> ";
        $str .= " <td> Address </td> <td></td> <td></td> ";
        $str .= ' <td> <input type="text" class="form-control" name ="address" id="address2"  value="' . $this->model->getAddress() . '"> </td> </tr> ';

        $str .= " <tr>";
        $str .= " <td> Email Address </td> <td></td> <td></td> ";
        $str .= ' <td> <input type="text" class="form-control" name ="email" id="email2"  value="' . $this->model->getEmail() . '"> </td> </tr> ';

        $str .= " <tr> ";
        $str .= " <td> Phone Number </td>  <td></td> <td></td> ";
        $str .= ' <td> <input type="text" class="form-control" name ="phoneNumber" id="phone2"  value="' . $this->model->getPhoneNumber() . '"> </td> </tr> ';

        $str .= " <tr>";
        $str .= " <td> URL </td>  <td></td> <td></td> ";
        $str .= ' <td> <input type="text" class="form-control" name ="url" id="URL2" value="' . $this->model->getURL() . '"> </td> </tr> ';

        $str .= " <tr> ";
        $str .= " <td></td> ";
        $str .= ' <td> <button type="submit" class="btn" name ="save" onclick="return validateaeditcomp()"> Save </button> </td> ';  //SAVE ACTION
        $str .= ' <td> <a class="btn" name ="delete" href=\'companiesList.php?action=delete&id= " ' . $this->model->getID() . '"\' onClick="javascript:return confirm(\'are you sure you want to delete this?\');"> Delete </a> </td> ';  //DELETE ACTION

        $str .= " </tbody> </table> ";
        $str .= " </div> ";
        $str .= " </form> ";


        // if (isset($_POST['save'])) {

        //     $type = "ay 7aga";
        //     $this->controller->editComp();

        //     // $this->model->editCompany('. $_POST["compId"] .', $type, '. $_POST["name"].', '.$_POST["email"].', '.$_POST["url"].', '.$_POST["phoneNumber"].', '.$_POST["address"].')->editComp();
        //     // $this->controller->editComp();

        //     echo "<script type=\"text/javascript\">
        //         window.onload = function() {
        //           document.getElementById('id01').style.display = 'block';
        //           document.getElementById('id02').style.display = 'none';
        //         };
        //       </script>";
        // }

        return $str;
    }


    //<a class="btn" href=" ">   </a>

}
