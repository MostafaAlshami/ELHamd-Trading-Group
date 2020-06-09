<?php
require_once(__ROOT__ . "model/model.php");
require_once(__ROOT__ . "model/company_model.php");
require_once(__ROOT__ . "model/bankAcc_model.php");

?>

<?php

class Contract extends Model
{
  private $contract_no;
  private $contract_date;
  private Company $seller;
  private Company $buyer;
  private $status;
  private BankAccount $bankAcc;
  private $total_quantity;
  private $shipment_date;
  private $type;

  function __construct($contract_no, $contract_date="", $seller="", $buyer="", $status="", 
                       $bankAcc, $total_quantity="", $shipment_date="", $type="")
  {
    $this->contract_id = $contract_no;
    $this->dbh = $this->connect();

    if("" == $contract_no)
    {
      $this->readContract($contract_no);
    }
    else
    {
      $this->contract_no = $contract_no;
      $this->contract_date = $contract_date;
      //$this->seller = new Company(company id);
      //$this->buyer = new Company(company id);
      $this->status = $status;
      //$this->bankAcc = new BankAccount(acc_id);
      $this->total_quantity = $total_quantity;
      $this->shipment_date = $shipment_date;
      $this->type = $type;
    }
  }        
  
  
  function readContract($contract_no)
  {
    $sql = "";
    //select no, date, status, quantity, shipmentdate, type from contract
    //select seller and buyer name from company
    //select all bank account data from bankAcc


    $db = $this->connect();
    $result = $db->query($sql); 

    if($result->num_rows == 1)
    {
      $row = $db->fetchRow(); 
      $this->contract_no = $row["contract_no"];
      $this->contract_date = $row["contract_date"];
      $this->status = $row["status"];
      $this->total_quantity = $row["total_quantity"];
      $this->shipment_date = $row["shipment_date"];
      $this->type = $row["type"];
       
      //this->seller = $row["company_name"];
      //$this->buyer = $row["company_name"]; 

      //$this->bankAcc-> = $row[""];
    }
    else
    {
      $row = $db->fetchRow(); 
      $this->contract_no = "";
      $this->contract_date = "";
      $this->status = "";
      $this->total_quantity = "";
      $this->shipment_date = "";
      $this->type = "";
       
      //this->seller = "";
      //$this->buyer = "";

      //$this->bankAcc-> = "";

    }

  }



}
?>