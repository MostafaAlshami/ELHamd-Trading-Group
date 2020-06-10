<?php
require_once(__ROOT__ . "view/View.php");

class InvoiceView extends View
{
    public function output()
    {
        $str = "";

        $str .= ' <div class="table-responsive"> <table class="table"> ';

        $str .= ' <thead class=" text-primary"> ';
        $str .= ' <th> Contract NO </th> ';
        $str .= ' <th></th> <th></th>';   
       // $str .= ' <th> '.$this->model->getInvoiceNO().' </th> ';  
        $str .= ' <th></th> '; 

        $str .= ' <th class="text-right"> </th> ';
        $str .= ' </thead> ';

        $str .= ' <tbody> ';

        $str .= ' <tr> ';
        $str .= ' <th> Invoice Date </th> <th></th> ';
        $str .= ' <td> '.$this->model->getInvoiceDate().' </td> <td></td> ';
        $str .= ' </tr> ';

        $str .= ' <tr> ';
        $str .= ' <th> Final Cost </th> <th></th> ';
        $str .= ' <td> '.$this->model->getFinalCost().' </td> <td></td> ';
        $str .= ' </tr> ';

        $str .= ' <tr> ';
        $str .= ' <th> Remarks </th> <th></th> ';
        $str .= ' <td> '.$this->model->getPayTerms().' </td> <td></td> ';
        $str .= ' </tr> ';

        $str .= ' <tr> ';
        $str .= ' <th> Payment Terms </th> <th></th> ';
        $str .= ' <td> '.$this->model->getRemarks().' </td> <td></td> ';
        $str .= ' </tr> ';

        $str .= ' <tr> <td></td>  <td></td>  <td></td> ';
        $str .= ' <td> <button class=" btn" href=""> Edit </button> </td> ';
        $str .= ' </tr>  ';

        $str .= ' </tbody> </table>';
        $str .= ' </div> ';

    }

}
?>    