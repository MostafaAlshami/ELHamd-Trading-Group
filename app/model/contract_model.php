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
    $sql = "SELECT 
            FROM ";
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

  function getContractNo(){
    return $this->contract_no;
  }
  function set($ContractNo){
    return $this->contract_no = $contract_no;
  }

  function getContractDate(){
    return $this->contract_date;
  }
  function setContractDate($contract_date){
    return $this->contract_date = $contract_date;
  }

  function getSeller(){
    return $this->seller;
  }
  function setSeller($seller){
    return $this->seller = $seller;
  }

  function getBuyer(){
    return $this->buyer;
  }
  function setBuyer($buyer){
    return $this->buyer = $buyer;
  }

  function getStatus(){
    return $this->status;
  }
  function setStatus($status){
    return $this->status = $status;
  }

  function getBankAcc(){
    return $this->bankAcc;
  }
  function setBankAcc($bankAcc){
    return $this->bankAcc = $bankAcc;
  }

  function getQuantity(){
    return $this->total_quantity;
  }
  function setQuantity($total_quantity){
    return $this->total_quantity = $total_quantity;
  }

  function getShipmentDate(){
    return $this->shipment_date;
  }
  function setShipmentDate($shipment_date){
    return $this->shipment_date = $shipment_date;
  }

  function getType(){
    return $this->type;
  }
  function setType($type){
    return $this->type = $type;
  }



  function updateContract($contract_no, $contract_date, /*$seller, $buyer,*/ $status, 
                        /*$bankAcc,*/ $total_quantity, $shipment_date, $type)
  {
    $contract_no = $this->dbh->getConn()->real_escape_string($contract_no);
    $contract_date = $this->dbh->getConn()->real_escape_string($contract_date);
    $status = $this->dbh->getConn()->real_escape_string($status);
    $total_quantity = $this->dbh->getConn()->real_escape_string($total_quantity);
    $shipment_date = $this->dbh->getConn()->real_escape_string($shipment_date);
    $type = $this->dbh->getConn()->real_escape_string($type);

    //$seller = $this->dbh->getConn()->real_escape_string($seller);
    //$buyer = $this->dbh->getConn()->real_escape_string($buyer);
   //$bankAcc = $this->dbh->getConn()->real_escape_string($bankAcc);


    $sql = "UPDATE contract SET, contract_date = '$contract_date',status = '$status', 

            total_quantity = '$total_quantity', shipment_date = '$shipment_date',type = '$type' 
            WHERE contract_no = $contract_no";

    //edit company_id in seller_id, buyer_id
    //edit bank account

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



  function removeContract($contract_no)
  {
    $sql = "DELETE FROM contract WHERE  contract_no = $contract_no";

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