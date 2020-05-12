<?php
// if (!isset($_SESSION)) {
//     session_start();
// }
require_once(__ROOT__ . "view/view.php");

class CompaniesView extends View
{
    public function output()
    {
        $str = "";

        $str .= ' <div class="table-responsive"> <table class="table"> ';
        $str .= ' <thead class=" text-primary"> ';
        $str .= ' <th> Comapny </th> ';
        $str .= ' <th> Email </th> ';
        $str .= ' <th> Phone Number </th> ';
        $str .= ' <th> Website </th> ';
        $str .= ' <th> Address </th> ';
        $str .= ' <th class="text-right"> </th> ';
        $str .= ' </thead> <tbody> ';

        foreach ($this->model->getComapnies() as $Company) {
            $str .= ' <tr>';
            $str .= ' <td>  ' . $Company->getName() . '  </td> ';
            $str .= ' <td>  ' . $Company->getEmail() . '  </td> ';
            $str .= ' <td>  ' . $Company->getPhoneNumber() . '  </td> ';
            $str .= ' <td>  ' . $Company->getURL() . '  </td> ';
            $str .= ' <td>  ' . $Company->getAddress() . '  </td> ';
            $str .= " <td class=\"text-right\"><a class=\"btn\" href='companiesList.php?action=view&id= " . $Company->getID() . "'   > View </a></td> ";   //check href
            $str .= " <td class=\"text-right\"><a class=\"btn\" href='companiesList.php?action=edit&id= " . $Company->getID() . "'  > Edit </a></td> ";   //check href

            $str .= ' </tr> ';
        }


        $str .= ' </tbody> ';
        $str .= ' </table> ';
        $str .= ' <a class="btn"  href=\'companiesList.php?action=add&id= " "\' > Add Company </a> '; //ADD COMPANY ACTION HERE
        $str .= ' </div> ';

        return $str;
    }
}
