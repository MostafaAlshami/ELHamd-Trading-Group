<?php

require_once(__ROOT__ . "model/model.php");
require_once(__ROOT__ . "model/contract_model.php");
require_once(__ROOT__ . "model/company_model.php");
require_once(__ROOT__ . "model/bankAcc_model.php");
?>

<?php

class Contracts extends Model
{
    private $contracts;

    function __construct()
    {
        $this->fillArray();
    }

    function fillArray()
    {
        $this->contracts = array();
        $this->dbh = $this->connect();
        $result = $this->readContracts();

        while ($row = $result->fetch_assoc()) 
        {
            array_push($this->contracts, new Contract(
                $row["contract_no"],
                $row["contract_date"],
                $row["status"],
                $row["total_quantity"],
                $row["shipment_date"]
                $row["type"],
                /*
                $row[""], //bank account
                $row[""], //buyer
                $row[""] //seller
                */
            ));
        }    
    }


    function readContracts()
    {
        $sql = "SELECT 
                FROM ";
        //select no, date, status, type from contract
        //select seller and buyer name from company
 

        $db = $this->connect();
        $result = $db->query($sql); 

        if($result->num_rows == 0){
           return $result;
        }
        else {
           return false;
        }
    }


    function getContracts()
    {
        $this->fillArray();
        return $this->contracts;
    }


    function getContract($contract_id)
    {
        foreach($this->contracts as $contract)
        {
            if ($contract_no == $contract->getContractNo)
            {
                return $contract;
            }
        }
    }


    function addContract($contract_no, $contract_date, /*$seller, $buyer,*/ $status, 
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

        $sql = "INSERT INTO contract ()
                VALUES ()";

        //buyer, seller, bank account

        ///CHECK echos
        if ($this->dbh->query($sql) === true) {
            echo "Records inserted successfully.";
            $this->fillArray();
        } else {
            echo "ERROR: Could not execute $sql. " . $this->conn->error;
        }        
    }



}
?>