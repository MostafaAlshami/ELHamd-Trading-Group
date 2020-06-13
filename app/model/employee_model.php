<?php
  require_once(__ROOT__ . "model/model.php");
?>

<?php
class Employee extends Model{
    private $empid;
    private $empfirstname;
    private $emplastname;
    private $email;
    private $address;
    private $dep;
    private $mobile;
    private $birthdate;
    private $edudegree;
    private $empdate;
    private $salary;
    private $compid;
    
  function __construct($empid,$empfirstname="",$emplastname="",$email="",$address="",$dep="",$mobile="",$birthdate="",$edudegree="",$empdate="",$salary="",$compid="",$national="") 
  {
    $this->empid = $empid;
	$this->db = $this->connect();

    if(""===$empfirstname)
    {
      $this->readEmployee($empid);
    }
    else
    {
      $this->empfirstname = $empfirstname;
      $this->emplastname = $emplastname;
      $this->email=$email;
      $this->address= $address;
      $this->dep=$dep;
      $this->mobile = $mobile;
      $this->birthdate = $birthdate;
      $this->edudegree= $edudegree;
      $this->empdate= $empdate;
      $this->salary=$salary;
      $this->compid=$compid;
      $this->national=$national;

    }
  }

  
    public function getEmpid()
    {
        return $this->empid;
    }

    public function setEmpid($empid)
    {
        $this->empid = $empid;
    }

    public function getBirthdate()
    {
        return $this->birthdate;
    }

    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;
    }

    public function getMobile()
    {
        return $this->mobile;
    }

    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getEdudegree()
    {
        return $this->edudegree;
    }

    public function setEdudegree($edudegree)
    {
        $this->edudegree = $edudegree;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmpfirstname()
    {
        return $this->empfirstname;
    }

    public function setEmpfirstname($empfirstname)
    {
        $this->empfirstname = $empfirstname;
    }

    public function getEmplastname()
    {
        return $this->emplastname;
    }

    public function setEmplastname($emplastname)
    {
        $this->emplastname = $emplastname;
    }

    public function getDep()
    {
        return $this->dep;
    }

    public function setDep($dep)
    {
        $this->dep = $dep;

        return $this;
    }

    public function getCompid()
    {
        return $this->compid;
    }

    public function setCompid($compid)
    {
        $this->compid = $compid;
    }

    public function getEmpdate()
    {
        return $this->empdate;
    }

    public function setEmpdate($empdate)
    {
        $this->empdate = $empdate;
    }


    public function getNational()
      {
            return $this->national;
      }

      public function setNational($national)
      {
            $this->national = $national;
      }
      
      public function validate($value)
      {
          if(!filter_var($value, FILTER_VALIDATE_INT) === false||preg_match('/[\'\/~`\!@#\$%\^&\*\(\)\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\].*[0-9]|[0-9]/', $value)||$value=="")
          {
              return false;
          }   
          else{
              return true;
          }
      }
    
    function readEmployee($empid)
    {
        $sql = "SELECT * FROM employee WHERE ID='$empid'";
        $db = $this->connect();
        $result = $db->query($sql);

        if($result->num_rows == 1)
        {
          $row = $db->fetchRow();
          $this->empfirstname = $row["First_Name"];
          $this->emplastname = $row["Last_Name"];
          $this->email = $row["email"];
          $this->address = $row["address"];
          //$this->dep = $row["Dep"];
          $this->mobile = $row["mobile"];
          $this->birthdate = $row["DOB"];
          $this->edudegree = $row["degree"];
          $this->empdate = $row["emp_date"];
          $this->salary = $row["salary"];
          $this->compid = $row["comp_id"];
          $this->national = $row["national_id"];


        }
        else
        {
    

          $this->empfirstname = "";
          $this->emplastname = "";
          $this->email = "";
          $this->address = "";
          $this->dep = "";
          $this->mobile = "";
          $this->birthdate = "";
          $this->edudegree = "";
          $this->empdate = "";
          $this->salary = "";
          $this->compid = "";
          $this->national = "";


        }
      }


      function editEmployee($empid,$empfirstname,$emplastname,$email,$address,$mobile,$birthdate,$edudegree,$empdate,$salary,$compid,$national)
      {
        
        
        if(filter_var($email, FILTER_VALIDATE_EMAIL)==false)
        {
          echo "<script>alert('Invalid Email Entered');</script>";

        } 
        else 
        {
          if($this->validate($empfirstname)==false )
          {
            echo "<script>alert('Invalid First Name Entered');</script>";
          }
          else
          {
            if($this->validate($emplastname)==false )
          {
            echo "<script>alert('Invalid Last Name Entered');</script>";
          }
          else{
            if($this->validate($edudegree)==false )
            {
              echo "<script>alert('Invalid Degree Name Entered');</script>";
            }
            else{
              if($salary < 0 || $compid < 0 || $national < 0 || $mobile < 0)
              {
                echo "<script>alert('Negative Number Entered');</script>";
              }
              else{
                $empfirstname = $this->dbh->getConn()->real_escape_string($empfirstname);
              $emplastname = $this->dbh->getConn()->real_escape_string($emplastname);
              $address = $this->dbh->getConn()->real_escape_string($address);
              //$dep = $this->dbh->getConn()->real_escape_string($dep);
              $mobile = $this->dbh->getConn()->real_escape_string($mobile);
              $birthdate = $this->dbh->getConn()->real_escape_string($birthdate);
              $edudegree = $this->dbh->getConn()->real_escape_string($edudegree);
              $empdate = $this->dbh->getConn()->real_escape_string($empdate);
              $salary = $this->dbh->getConn()->real_escape_string($salary);
              $compid = $this->dbh->getConn()->real_escape_string($compid);
              $national = $this->dbh->getConn()->real_escape_string($national);
    
        
              $sql = "UPDATE employee SET First_Name='$empfirstname', Last_Name='$emplastname', email='$email', address='$address' , mobile='$mobile', DOB='$birthdate',
              degree='$edudegree', emp_date='$empdate', salary='$salary', comp_id='$compid', national_id='$national' WHERE ID = '$empid'";
          
              if($this->dbh->query($sql) === true)
              {
                echo "Records updated successfully.";
              }
              else
              {  
                echo "ERROR: Could not execute $sql. " . $conn->error;
              }
            }
          }    
          }
            }
          }
              }
              
          
    
      function deleteEmployee($empid)
      {
        $sql="DELETE FROM employee WHERE ID = $empid";
           
        ///CHECK echos
        if($this->dbh->query($sql) === true)
        {
          echo "Record deleted successfully.";
        } 
        else
        {
        echo "ERROR: Could not execute $sql. " . $conn->error;
        }
      }


     
    }


   
