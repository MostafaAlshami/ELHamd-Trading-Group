<?php
require_once(__ROOT__ . "model/model.php");

?>

<?php

class FAQ extends Model
{
    private $Q_ID;
    private $Q_type;
    private $Q;
    private $A;

    function __construct($Q_ID, $Q_type="", $Q="", $A="")
    {
        $this->Q_ID = $Q_ID;
        $this->dbh = $this->connect();
    
        if("" === $Q_type)
        {
          $this->readQ($Q_ID);
        }
        else
        {
          $this->Q_type = $Q_type; 
          $this->Q_type = $Q;
          $this->Q_type = $A;
        }
    }

    function readQ($Q_ID)
    {
        $sql = "Select * FROM qanda WHERE Q_ID=" . $Q_ID;
        $dbh = $this->connect();
        $result = $dbh->query($sql);
        
        if($result->num_rows == 1)
        {
          $row = $dbh->fetchRow();
          $this->Q_type = $row["Q_type"];
          $this->Q = $row["Q"];
          $this->A= $row["A"];
        }
        else
        {
          $this->Q_type = "";
          $this->Q = "";
          $this->A = "";
        }
    }

    function getID(){
        return $this->Q_ID;
    }
    function setID($){
        return $this->Q_ID = $Q_ID;
    }

    function getType(){
        return $this->Q_type;
    }
    function setType($Q_type){
        return $this->Q_type = $Q_type;
    }

    function getQ(){
        return $this->Q;
    }
    function setQ($Q){
        return $this->Q = $Q;
    }

    function getA(){
        return $this->A;
    }
    function setA($A){
        return $this->A = $A;
    }

    function insertQ($Q_type, $Q, $A)
    {
        $Q_type = $this->dbh->getConn()->real_escape_string($Q_type);
        $Q = $this->dbh->getConn()->real_escape_string($Q);
        $A = $this->dbh->getConn()->real_escape_string($A);


        $sql = "INSERT INTO (Q_type, Q, A)
                VALUES ('$Q_type','$Q', '$A')";


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


    function updateQ($Q_ID, $Q_type, $Q, $A)
    {
        $Q_type = $this->dbh->getConn()->real_escape_string($Q_type);
        $Q = $this->dbh->getConn()->real_escape_string($Q);
        $A = $this->dbh->getConn()->real_escape_string($A);

        $sql = "UPDATE qanda SET Q_type = '$Q_type', Q = '$Q', A = '$A'";
          
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

    function deleteQ($Q_ID)
    {
        $sql = "DELETE FROM qanda WHERE Q_ID = $Q_ID";

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