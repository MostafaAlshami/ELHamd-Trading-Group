<?php  
require_once(__ROOT__ . "model/model.php");

?>

<?php

class Invoice extends model
{
  private $invoice_no;
  private $invoice_date;
  private $final_cost;
  private $payment_terms;
  private $remarks;

  function __construct($invoice_no, $invoice_date="", $final_cost="", $payment_terms="", $remarks="")
  {
    $this->invoice_no = $invoice_no;
    $this->dbh = $this->connect();

    if("" == $invoice_date)
    {
      $this->readInvoice($invoice_no);    
    }
    else
    { 
      $this->invoice_no = $invoice_no;
      $this->invoice_date = $invoice_date;
      $this->final_cost = $final_cost;
      $this->payment_terms = $payment_terms;
      $this->remarks = $remarks;
    }
  }

  function readInvoice($invoice_no)
  {
    $sql = "SELECT * FROM invoice WHERE invoice_no = $invoice_no";
              
    $db = $this->connect();
    $result = $db->query($sql); 

    if($result->num_rows == 1)
    {
        $row = $db->fetchRow();

        $this->invoice_no = $row["invoice_no"]; 
        $this->invoice_date = $row["invoice_date"]; 
        $this->final_cost = $row["final_cost"]; 
        $this->payment_terms = $row["payment_terms"]; 
        $this->remarks = $row["remarks"]; 
    }
    else
    {
        $this->invoice_no = "";
        $this->invoice_date = ""; 
        $this->final_cost = ""; 
        $this->payment_terms = ""; 
        $this->remarks = "";
    }
  }

  function getInvoiceNO(){
    return $this->invoice_no;
  }
  function setInvoiceNO($invoice_no){
    return $this->invoice_no = $invoice_no;
  }
  
  function getInvoiceDate(){
    return $this->invoice_date;
  }
  function setInvoiceDate($invoice_date){
    return $this->invoice_date = $invoice_date;
  }

  function getFinalCost(){
    return $this->final_cost;
  }
  function setFinalCost($final_cost){
    return $this->final_cost = $final_cost;
  }
  
  function getPayTerms(){
    return $this->payment_terms;
  }
  function setPayTerms($payment_terms){
    return $this->payment_terms = $payment_terms;
  }

  function getRemarks(){
    return $this->remarks;
  }
  function setRemarks($remarks){
    return $this->remarks = $remarks;
  }

  //NOTE >> Invoice number is not auto incremented 
  function insertInvoice($invoice_no, $invoice_date, $final_cost, $payment_terms, $remarks)
  {
    $invoice_no = $this->dbh->getConn()->real_escape_string($invoice_no);
    $invoice_date = $this->dbh->getConn()->real_escape_string($invoice_date);
    $final_cost = $this->dbh->getConn()->real_escape_string($final_cost);
    $payment_terms = $this->dbh->getConn()->real_escape_string($payment_terms);
    $remarks = $this->dbh->getConn()->real_escape_string($remarks);

    $sql = "INSERT INTO invoice (invoice_no, invoice_date, final_cost, payment_terms, remarks)
            VALUES ($invoice_no, $invoice_date, $final_cost, $payment_terms, $remarks)";
    //INSERT CONTRACT NUMBER

    if ($this->dbh->query($sql) === true) 
    {
      echo "Records inserted successfully.";
      $this->fillArray();
    }
    else 
    {
      echo "ERROR: Could not execute $sql. " . $this->conn->error;
    }
  }


  function editInvoice($invoice_no, $invoice_date, $final_cost, $payment_terms, $remarks)
  {
    $invoice_no = $this->dbh->getConn()->real_escape_string($invoice_no);
    $invoice_date = $this->dbh->getConn()->real_escape_string($invoice_date);
    $final_cost = $this->dbh->getConn()->real_escape_string($final_cost);
    $payment_terms = $this->dbh->getConn()->real_escape_string($payment_terms);
    $remarks = $this->dbh->getConn()->real_escape_string($remarks);

    $sql = "UPDATE invoice SET invoice_no = '$invoice_no', invoice_date = '$invoice_date',
            final_cost = '$final_cost', payment_terms = '$payment_terms', remarks = 'remarks' 
            WHERE invoice_no = $invoice_no";
          
          
    if ($this->dbh->query($sql) === true) 
    {
      echo "Records updated successfully.";
      $this->fillArray();
    }
    else 
    {
      echo "ERROR: Could not execute $sql. " . $this->conn->error;
    }
  }


  function deleteInvoice($invoice_no)
  {
    $sql = "DELETE FROM invoice WHERE invoice_no = $invoice_no";

    if ($this->dbh->query($sql) === true)
    {
      echo "Record deleted successfully.";
    }
    else 
    {
      echo "ERROR: Could not execute $sql. " . $this->conn->error;
    }
  }



}
?>