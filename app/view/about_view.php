<?php
require_once(__ROOT__ . "view/view.php");

class AboutView extends View
{

  public function output()
  {

    $str = "";    
    $str .= '    <div class="table-responsive"> ';
    $str .= '    <table class="table"> ';
    $str .= '        <tr> ';
    $str .= '            <td> ';
    $str .= '                <img src="../public/Products/herbs.jpg" style="width:50%"> ';
    $str .= '            </td> ';

    $str .= '             <td> </td> ';

    $str .= '             <th> ';
    $str .= '    ' . $this->model->getIntro() . '  </th>  ';  //intro 
   // $str .= '             ';
    $str .= '        </tr> ';


    $str .= '        <tr> ';
    $str .= '            <th> ';                                 
    $str .= '   ' . $this->model->getInfo() . ' </th> ';     //   info
    //$str .= '             ';

    $str .= '            <td> </td> ';

    $str .= '            <td> ';
    $str .= '                <img src="../public/Products/snacks.jpg" style="width:50%"> ';
    $str .= '            </td> ';
    $str .= '        </tr> ';
                                     

    $str .= '    </table> ';
    $str .= '    </div> ';   

    return $str;

  }

}

?>