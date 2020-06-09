<?php
require_once(__ROOT__ . "controller/controller.php");

?>

<?php

class invoiceController extends controller
{
  public function insertInv()
  {
    $invoice_no = $_POST['invoice_no'];
    $invoice_date = $_POST['invoice_date'];
    $final_cost = $_POST['final_cost'];
    $payemnt_terms = $_POST['payemnt_terms'];
    $remarks = $_POST['remarks'];

    $this->model->insertInvoice($invoice_no, $invoice_date, $final_cost, $payment_terms, $remarks);
  }


  public function editInv()
  {
    $invoice_no = $_POST['invoice_no'];
    $invoice_date = $_POST['invoice_date'];
    $final_cost = $_POST['final_cost'];
    $payemnt_terms = $_POST['payemnt_terms'];
    $remarks = $_POST['remarks'];

    $this->model->editInvoice($invoice_no, $invoice_date, $final_cost, $payment_terms, $remarks);
  }


  public function deleteInv()
  {
    $invoice_no = $_POST['invoice_no'];
    $this->model->deleteCommodity($invoice_no); 
  }

  
}
?>