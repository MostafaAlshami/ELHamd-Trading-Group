<?php
require_once(__ROOT__ . "view/view.php");

class ContactView extends View
{

  public function output()
  {

    $str = "";   

    $str .= ' <div class="card-header"> <h5 class="card-category"></h5> '; 
    $str .= ' <a class="btn" href="dashboard.php"> <i class="now-ui-icons arrows-1_minimal-left"></i> Back </a> ';
    $str .= ' <h4 class="card-title"> ' . $this->model->getCompName() . ' </h4> </div> ';
    $str .= ' <div class="card-body"> <div class="table-responsive"> ';
    $str .= ' <table class="table"> ';
    $str .= ' <tr> ';
    $str .= ' <th> Address </th> ';
    $str .= ' <td> ' . $this->model->getCompAdd() . ' </td>  <td></td> ';
    $str .= ' </tr> ';

    $str .= '   <tr> ';
    $str .= '       <th> Phone Number </th> ';
    $str .= '       <td> ' . $this->model->getCompMobile() . ' </td>  <td></td> ';      
    $str .= '   </tr> ';

    $str .= '   <tr> ';
    $str .= '       <th> Telephone </th> ';
    $str .= '        <td> ' . $this->model->getCompTel() . ' </td> <td></td> ';      
    $str .= '   </tr> ';

    $str .= '  <tr> ';
    $str .= '  <th> Fax </th> ';
    $str .= '   <td> ' . $this->model->getCompFax() . ' </td> <td></td> ';
    $str .= '  </tr> ';

    $str .= '  <tr> ';
    $str .= '   <th> Email Address </th> ';
    $str .= '   <td> ' . $this->model->getEmail() . ' </td> <td></td> ';
    //$str .= ' <td> <a href =\"mailto:" . $this->model->getEmail() . "\">" . $this->model->getEmail() .  " </a> </td> <td></td>';
    $str .= '  </tr> ';

    $str .= '  <tr> ';
    $str .= '  <th> Website </th> ';
    //$str .= ' <td> <a href ="http://' . $this->model->getWebsite() . ' "target="blank"> . $this->model->getWebsite() . ' </a> ';
    $str .= '   <td> ' . $this->model->getWebsite() . ' </td> <td></td> ';
    $str .= '  </tr> ';        

    $str .= '</table> </div> </div> ';     
  
    return $str;

  }

  

}

?>