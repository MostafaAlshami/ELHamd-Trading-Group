<?php
require_once(__ROOT__ . "model/model.php");
require_once(__ROOT__ . "model/company_model.php");

class Companies extends model
{
    private $companies;


    function __construct()
    {
        $this->fillArray();
    }

    function fillArray()
    {
        $this->companies = array();
        $this->dbh = $this->connect();
        $result = $this->readCompanies();
        
        while($row = $result->fetch_assoc())
        {
            array_push($this->companies, new Company($row["company_id"], $row["company_name"], $row["type"], $row["email"],
                                                     $row["url"], $row["phoneNumber"], $row["address"]));
        }
    }

    function readCompanies()
    {
        $sql = "SELECT * FROM company";
        $result = $this->dbh->query($sql);
       
        if($result->num_rows > 0)
        {
            return $result;
        }
        else
        {
            return false;
        }
    }


    function getComapnies() 
    {
		$this->fillArray();  
		return $this->companies;
	}

    function getCompany($company_id) 
    {
        foreach($this->companies as $company) 
        {
            if ($company_id == $company->getID()) 
            {
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
       

        $sql = "INSERT INTO company (company_name, type, email, url, phoneNumber, address)
                VALUES ('$company_name', '$type', '$email', '$url', '$phoneNumber', '$address')";
    
       ///CHECK echos
       if($this->dbh->query($sql) === true)
       {
          echo "Records inserted successfully.";
          $this->fillArray();
       }
       else
       {  
          echo "ERROR: Could not execute $sql. " . $conn->error;
       }
       //FIX AND TEST
       //array_push($this->Companies, new Comapny( , , , , , ));
   }



}

















?>