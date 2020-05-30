<?php
error_reporting(0);
require_once(__ROOT__ . "model/model.php");
require_once(__ROOT__ . "model/company_model.php");

class Companies extends Model
{
    private $companies;


    function __construct()
    {
        $this->fillArray();
        $this->fillArray2();
    }

    function fillArray2()
    {
        $this->companies = array();
        $this->dbh = $this->connect();
        $result = $this->searchCompan();

        while ($row = $result->fetch_assoc()) {
            array_push($this->companies, new Company(
                $row["company_id"],
                $row["company_name"],
                $row["cType"],
                $row["email"],
                $row["curl"],
                $row["phoneNumber"],
                $row["cAddress"]
            ));
        }
    }
    function fillArray()
    {
        $this->companies = array();
        $this->dbh = $this->connect();
        $result = $this->readCompanies();

        while ($row = $result->fetch_assoc()) {
            array_push($this->companies, new Company(
                $row["company_id"],
                $row["company_name"],
                $row["cType"],
                $row["email"],
                $row["curl"],
                $row["phoneNumber"],
                $row["cAddress"]
            ));
        }
    }


    function readCompanies()
    {
        $sql = "SELECT * FROM company";
        $result = $this->dbh->query($sql);

        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }


    function getComapnies()
    {
        $this->fillArray();
        return $this->companies;
    }

    function getCompaniesSearch()
    {
        $this->fillArray2();
        return $this->companies;
    }

    function getCompany($company_id)
    {
        foreach ($this->companies as $company) {
            if ($company_id == $company->getID()) {
                return $company;
            }
        }
    }



    function insertCompany($company_name, $type, $email, $url, $phoneNumber, $address)
    {
        $company_name = $this->dbh->getConn()->real_escape_string($company_name);
        $type = $this->dbh->getConn()->real_escape_string($type);
        $email = $this->dbh->getConn()->real_escape_string($email);
        $url = $this->dbh->getConn()->real_escape_string($url);
        $phoneNumber = $this->dbh->getConn()->real_escape_string($phoneNumber);
        $address = $this->dbh->getConn()->real_escape_string($address);


        $sql = "INSERT INTO company (company_name, cType, email, curl, phoneNumber, cAddress)
                VALUES ('$company_name', '$type', '$email', '$url', '$phoneNumber', '$address')";

        ///CHECK echos
        if ($this->dbh->query($sql) === true) {
            echo "Records inserted successfully.";
            $this->fillArray();
        } else {
            echo "ERROR: Could not execute $sql. " . $this->conn->error;
        }
        //FIX AND TEST
        //array_push($this->Companies, new Comapny( , , , , , ));
    }
    
    function searchCompany($x)
    {
        $sql = "SELECT * FROM company WHERE company_name like \"$x\" OR phoneNumber = \"$x\" OR email =\"$x \"";
        $result = $this->dbh->query($sql);

        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }
    function searchCompan()
    {
        // $x = "elhamd";
        $x = $_POST["value"];
        if ($x === "" || $x === Null) {
            $x = "Elhamd";
        }
        $y = $this->searchCompany($x);
        return $y;
    }
}
