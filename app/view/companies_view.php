<?php
if (!isset($_SESSION)) {
    session_start();
}
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
            if ($Company->getType() == "trading") {
                $str .= ' <tr>';
                $str .= ' <td>  ' . $Company->getName() . '  </td> ';
                $str .= " <td> <a href =\"mailto:" . $Company->getEmail() . "\">" . $Company->getEmail() .  " </a> </td> ";
                $str .= ' <td>  ' . $Company->getPhoneNumber() . '  </td> ';
                $str .= ' <td> <a href ="https://' . $Company->getURL() . ' "target="_blank">' . $Company->getURL() . ' </a> </td> ';
                $str .= ' <td>  ' . $Company->getAddress() . '  </td> ';
                $str .= " <td class=\"text-right\"><a class=\"btn\" href='companiesList.php?action=view&id= " . $Company->getID() . "'   > View </a></td> ";   //check href
                $str .= " <td class=\"text-right\"><a class=\"btn\" href='companiesList.php?action=edit&id= " . $Company->getID() . "'  > Edit </a></td> ";   //check href

                $str .= ' </tr> ';
            }
        }


        $str .= ' </tbody> ';
        $str .= ' </table> ';
        $str .= ' <a class="btn"  href=\'companiesList.php?action=add&id= " "\' > Add Company </a> '; //ADD COMPANY ACTION HERE
        $str .= ' </div> ';

        return $str;
    }

    public function output2()
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
            if ($Company->getType() == "shipping") {
                $str .= ' <tr>';
                $str .= ' <td>  ' . $Company->getName() . '  </td> ';
                $str .= " <td> <a href =\"mailto:" . $Company->getEmail() . "\">" . $Company->getEmail() .  " </a> </td> ";
                $str .= ' <td>  ' . $Company->getPhoneNumber() . '  </td> ';
                $str .= ' <td> <a href ="https://' . $Company->getURL() . ' "target="_blank">' . $Company->getURL() . ' </a> </td> ';
                $str .= ' <td>  ' . $Company->getAddress() . '  </td> ';
                $str .= " <td class=\"text-right\"><a class=\"btn\" href='companiesList.php?action=view&id= " . $Company->getID() . "'   > View </a></td> ";   //check href
                $str .= " <td class=\"text-right\"><a class=\"btn\" href='companiesList.php?action=edit&id= " . $Company->getID() . "'  > Edit </a></td> ";   //check href

                $str .= ' </tr> ';
            }
        }


        $str .= ' </tbody> ';
        $str .= ' </table> ';
        $str .= ' <a class="btn"  href=\'companiesList.php?action=add&id= " "\' > Add Company </a> '; //ADD COMPANY ACTION HERE
        $str .= ' </div> ';

        return $str;
    }
    public function searchOutput()
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
        $x = "Elhamd";
        foreach ($this->model->getCompaniesSearch() as $Company) {
            $str .= ' <tr>';
            $str .= ' <td>  ' . $Company->getName() . '  </td> ';
            $str .= " <td> <a href =\"mailto:" . $Company->getEmail() . "\">" . $Company->getEmail() .  " </a> </td> ";
            $str .= ' <td>  ' . $Company->getPhoneNumber() . '  </td> ';
            $str .= ' <td> <a href ="https://' . $Company->getURL() . ' "target="_blank">' . $Company->getURL() . ' </a> </td> ';
            $str .= ' <td>  ' . $Company->getAddress() . '  </td> ';
            $str .= " <td class=\"text-right\"><a class=\"btn\" href='companiesList.php?action=view&id= " . $Company->getID() . "'   > View </a></td> ";   //check href
            $str .= " <td class=\"text-right\"><a class=\"btn\" href='companiesList.php?action=edit&id= " . $Company->getID() . "'  > Edit </a></td> ";   //check href

            $str .= ' </tr> ';
        }


        $str .= ' </tbody> ';
        $str .= ' </table> ';
        $str .= ' <a class="btn"  href=\'companiesList.php\' > Back </a> '; //ADD COMPANY ACTION HERE
        $str .= ' </div> ';

        return $str;
    }
}
