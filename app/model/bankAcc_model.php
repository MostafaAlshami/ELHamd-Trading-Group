<?php
require_once(__ROOT__ . "model/model.php");

?>

<?php

class BankAccount extends move_uploaded_file
{
    private $acc_id;
    private $bank_name;
    private $bank_branch;
    private $benef_name;
    private $acc_no;
    private $swift_code;
    private $fax;
    private $address;
    private $phone_no;
    

    function __construct($acc_id, $bank_name = "", $bank_branch = "", $benef_name = "", $acc_no = "", $swift_code = "", $fax = "", $address = "", $phone_no = "")
    {
      $this->acc_id = $acc_id;
      $this->dbh = $this->connect();

      if("" === $bank_name)
      {
        $this->readBankAcc($acc_id);
      }
      else
      {
        $this->bank_name = $bank_name;
        $this->bank_branch = $bank_branch;
        $this->benef_name = $benef_name;
        $this->acc_no = $acc_no;
        $this->swift_code = $swift_code;
        $this->fax = $fax;
        $this->address = $address;
        $this->phone_no = $phone_no;
      }


      function readBankAcc($acc_id)
      {
        $sql = "Select * FROM bankacc WHERE acc_id=" . $acc_id;
        $dbh = $this->connect();
        $result = $dbh->query($sql);
        
        if($result->num_rows == 1)
        {
          $row = $dbh->fetchRow();
          $this->bank_name = $row["bank_name"];
          $this->bank_branch = $row["bank_branch"];
          $this->benef_name = $row["benef_name"];
          $this->acc_no = $row["acc_no"];
          $this->swift_code = $row["swift_code"];
          $this->fax = $row["fax"];
          $this->address = $row["address"];
          $this->phone_no = $row["phone_no"];
        }
        else
        {
          $this->bank_name = "";
          $this->bank_branch = "";
          $this->benef_name = "";
          $this->acc_no = "";
          $this->swift_code = "";
          $this->fax = "";
          $this->address = "";
          $this->phone_no = "";
        }
      }



      function getAccID()
      {
        return $this->acc_id;
      }
      function setAccID($acc_id)
      {
        return $this->acc_id = $acc_id;
      }


      function getBankName()
      {
        return $this->bank_name;
      }
      function setBankName($bank_name)
      {
        return $this->bank_name = $bank_name;
      }


      function getBankBranch()
      {
        return $this->bank_branch;
      }
      function setBankBranch($bank_branch)
      {
        return $this->bank_branch = $bank_branch;
      }

      function getBeneficiary()
      {
        return $this->benef_name;
      }
      function setBeneficiary($benef_name)
      {
        return $this->benef_name = $benef_name;
      }

      function getAccountNo()
      {
        return $this->acc_no;
      }
      function setAccountNo($acc_no)
      {
        return $this->acc_no = $acc_no;
      }

      function getSwiftCode()
      {
        return $this->swift_code;
      }
      function setSwiftCode($swift_code)
      {
        return $this->swift_code = $swift_code;
      }

      function getFax()
      {
        return $this->fax;
      }
      function setFax($fax)
      {
        return $this->fax = $fax;
      }

      function getAddress()
      {
        return $this->address;
      }
      function setAddress($address)
      {
        return $this->address = $address;
      }

      function getPhoneNo()
      {
        return $this->phone_no;
      }
      function setPhoneNo($phone_no)
      {
        return $this->phone_no = $phone_no;
      }


      function insertBankAcc($bank_name, $bank_branch, $benef_name, $acc_no, $swift_code, $fax, $address, $phone_no)
      {
        $bank_name = $this->dbh->getConn()->real_escape_string($bank_name);
        $bank_branch = $this->dbh->getConn()->real_escape_string($bank_branch);
        $benef_name = $this->dbh->getConn()->real_escape_string($benef_name);
        $acc_no = $this->dbh->getConn()->real_escape_string($acc_no);
        $swift_code = $this->dbh->getConn()->real_escape_string($swift_code);
        $fax = $this->dbh->getConn()->real_escape_string($fax);
        $address = $this->dbh->getConn()->real_escape_string($address);
        $phone_no = $this->dbh->getConn()->real_escape_string($phone_no);

        $sql = "INSERT INTO bankacc (bank_name, bank_branch, benef_name, acc_no, swift_code, fax, address, phone_no)
                VALUES ('$bank_name', '$bank_branch', '$benef_name', '$acc_no', '$swift_code', '$fax', '$address', '$phone_no')";

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



      function editBankAcc($acc_id, $bank_name, $bank_branch, $benef_name, $acc_no, $swift_code, $fax, $address, $phone_no)
      {
        $bank_name = $this->dbh->getConn()->real_escape_string($bank_name);
        $bank_branch = $this->dbh->getConn()->real_escape_string($bank_branch);
        $benef_name = $this->dbh->getConn()->real_escape_string($benef_name);
        $acc_no = $this->dbh->getConn()->real_escape_string($acc_no);
        $swift_code = $this->dbh->getConn()->real_escape_string($swift_code);
        $fax = $this->dbh->getConn()->real_escape_string($fax);
        $address = $this->dbh->getConn()->real_escape_string($address);
        $phone_no = $this->dbh->getConn()->real_escape_string($phone_no);

        $sql = "UPDATE bankacc SET bank_name = '$bank_name', bank_branch = '$bank_branch', benef_name = '$benef_name',
                acc_no = '$acc_no', swift_code = '$swift_code', fax = '$fax', address = '$address', phone_no = '$phone_no'
                WHERE acc_id = $acc_id";

        if ($this->dbh->query($sql) === true) 
        {
          echo "Records updated successfully.";
        } 
        else 
        {
          echo "ERROR: Could not execute $sql. " . $this->conn->error;
        }        
      }



      function deleteBankAcc($acc_id)
      {
        $sql = "DELETE FROM bankacc WHERE acc_id = $acc_id";

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



}

?>