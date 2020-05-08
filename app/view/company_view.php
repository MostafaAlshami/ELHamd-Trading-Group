<?php
require_once(__ROOT__ . "view/view.php");

class CompanyView extends View
{

    public function output()
    {
        $str = "";

        $str .= ' <div class="table-responsive"> <table class="table"> ';

        $str .= ' <thead class=" text-primary"> ';
        $str .= " <th> " . $this->model->getName() . " </th> <th></th><th></th> ";
        $str .= ' <th class="text-right"></th> </thead> ';

        $str .= " <tbody> ";

        $str .= " <tr> ";
        $str .= " <td> Address </td> <td></td> <td></td> ";
        $str .= " <td>" . $this->model->getAddress() . " </td> </tr> ";

        $str .= " <tr>";
        $str .= " <td> Email Address </td> <td></td> <td></td> ";
        $str .= " <td>" . $this->model->getEmail() . " </td> </tr> ";

        $str .= " <tr> ";
        $str .= " <td> Phone Number </td>  <td></td> <td></td> ";
        $str .= " <td> " . $this->model->getPhoneNumber() . " </td> </tr> ";

        $str .= " <tr>";
        $str .= " <td> URL </td>  <td></td> <td></td> ";
        $str .= " <td> " . $this->model->getURL() . " </td> </tr> ";

        $str .= " <tr> ";
        $str .= " <td></td> ";
        $str .= ' <td> <a class="btn" href=""> View contracts </a> </td> ';  //ACTIION
        $str .= ' <td> <a class="btn" href="editCompany.php"> Edit Profile </a> </td> ';    //ACTIION

        $str .= " <td></td> </tr> ";
        $str .= " </tbody> </table> ";
        $str .= " </div> ";

        return $str;
    }


    public function addCard()
    {
        $str = "";

        $str .= ' <div class="table-responsive"> <table class="table"> ';

        $str .= ' <thead class=" text-primary"> ';
        $str .= " <th> Company Name </th> <th></th><th></th> ";
        $str .= ' <th class="text-right"> <input type="text" class="form-control" value=""> </th> </thead> ';

        $str .= " <tbody> ";

        $str .= " <tr> ";
        $str .= " <td> Address </td> <td></td> <td></td> ";
        $str .= ' <td> <input type="text" class="form-control" value=""> </td> </tr> ';

        $str .= " <tr>";
        $str .= " <td> Email Address </td> <td></td> <td></td> ";
        $str .= ' <td> <input type="text" class="form-control" value=""> </td> </tr> ';

        $str .= " <tr> ";
        $str .= " <td> Phone Number </td>  <td></td> <td></td> ";
        $str .= ' <td> <input type="text" class="form-control" value=""> </td> </tr> ';

        $str .= " <tr>";
        $str .= " <td> URL </td>  <td></td> <td></td> ";
        $str .= ' <td> <input type="text" class="form-control" value=""> </td> </tr> ';

        $str .= " <tr> ";
        $str .= " <td></td> ";
        $str .= ' <td> <button class="btn" href=""> Save </button> </td> ';  //SAVE ACTION
        $str .= ' <td> <button class="btn" href=""> Cancel </button> </td> ';  //CANCEL ACTION
        $str .= " <td></td> </tr> ";

        $str .= " </tbody> </table> ";
        $str .= " </div> ";

        return $str;
    }




    public function editCard()
    {
        $str = "";
        $str .= ' <form action="" method ="post" > ';
        $str .= ' <div class="table-responsive"> <table class="table"> ';

        $str .= ' <thead class=" text-primary"> ';
        $str .= " <th> Company Name </th> <th></th><th></th> ";
        $str .= ' <th class="text-right"> <input type="text" class="form-control" name ="company_name" value="' . $this->model->getName() . '"> </th> </thead> ';

        $str .= " <tbody> ";

        $str .= " <tr> ";
        $str .= " <td> Address </td> <td></td> <td></td> ";
        $str .= ' <td> <input type="text" class="form-control" name ="address"  value="' . $this->model->getAddress() . '"> </td> </tr> ';

        $str .= " <tr>";
        $str .= " <td> Email Address </td> <td></td> <td></td> ";
        $str .= ' <td> <input type="text" class="form-control" name ="email"  value="' . $this->model->getEmail() . '"> </td> </tr> ';

        $str .= " <tr> ";
        $str .= " <td> Phone Number </td>  <td></td> <td></td> ";
        $str .= ' <td> <input type="text" class="form-control" name ="phoneNumber"  value="' . $this->model->getPhoneNumber() . '"> </td> </tr> ';

        $str .= " <tr>";
        $str .= " <td> URL </td>  <td></td> <td></td> ";
        $str .= ' <td> <input type="text" class="form-control" name ="url" value="' . $this->model->getURL() . '"> </td> </tr> ';
        $str .= ' <td> <input type="hidden"  name ="company_id" value="' . $this->model->getID() . '"> ';

        $str .= " <tr> ";
        $str .= " <td></td> ";
        $str .= ' <td> <button type="submit" class="btn" name ="save"> Save </button> </td> ';  //SAVE ACTION
        $str .= ' <td> <button class="btn" href=""> Delete </button> </td> ';  //DELETE ACTION
        $str .= " <td></td> </tr> ";

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
