<?php
  require_once(__ROOT__ . "model/model.php");
?>

<?php
class Employee extends Model
{
    private $empid;
    private $empfirstname;
    private $emplastname;
    private $birthdate;
    private $mobile;
    private $address;
    private $edudegree;
    private $empdata;
    private $salary;
    private $email;

  function __construct($empid,$empfirstname="",$emplastname="",$birthdate="",$mobile="",$address="",$edudegree="",$empdata="",$salary="",$email="") 
  {
    $this->empid = $empid;
	$this->dbh = $this->connect();

    if(""===$empfirstname)
    {
      $this->readEmployee($empid);
    }else
    {

      $this->empfirstname = $empfirstname;
      $this->emplastname = $emplastname;
      $this->birthdate = $birthdate;
      $this->mobile = $mobile;
      $this->address= $address;
      $this->edudegree= $edudegree;
      $this->empdata= $empdata;
      $this->salary=$salary;
      $this->email=$email;

    }
  }

    public function getEmpid()
    {
        return $this->empid;
    } 
    public function setEmpid($empid)
    {
        $this->empid = $empid;
        return $this;
    }
 
    public function getBirthdate()
    {
        return $this->birthdate;
    }
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;
        return $this;
    }


    public function getMobile()
    {
        return $this->mobile;
    }
 
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
        return $this;
    }

 
    public function getAddress()
    {
        return $this->address;
    } 
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    public function getEdudegree()
    {
        return $this->edudegree;
    }
    public function setEdudegree($edudegree)
    {
        $this->edudegree = $edudegree;

        return $this;
    }
 
    public function getEmpdata()
    {
        return $this->empdata;
    }
    public function setEmpdata($empdata)
    {
        $this->empdata = $empdata;

        return $this;
    }

    public function getSalary()
    {
        return $this->salary;
    }
    public function setSalary($salary)
    {
        $this->salary = $salary;

        return $this;
    }


    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
 
    public function getEmpfirstname()
    {
        return $this->empfirstname;
    }
    public function setEmpfirstname($empfirstname)
    {
        $this->empfirstname = $empfirstname;
        return $this;
    }

    public function getEmplastname()
    {
        return $this->emplastname;
    }
    public function setEmplastname($emplastname)
    {
        $this->emplastname = $emplastname;
        return $this;
    }


    function readEmployee($empid)
    {
        $sql = "SELECT * FROM user  JOIN  employee ON user.emp_ID = employee.ID WHERE user.emp_ID='$empid'";
        $dbh = $this->connect();
        $result = $dbh->query($sql);

        if($result->num_rows == 1)
        {
          $row = $dbh->fetchRow();
          $this->empfirstname = $row["First_Name"];
          $this->emplastname = $row["Last_Name"];
          $this->address = $row["address"];
          $this->email = $row["email"];
          $this->salary = $row["salary"];
          $this->mobile = $row["mobile"];
          $this->edudegree = $row["degree"];
          $this->birthdate = $row["DOB"];
          $this->empdate = $row["emp_date"];
        }
        else
        {
          $this->empfirstname = "";
          $this->emplastname = "";
          $this->address = "";
          $this->email = "";
          $this->salary = "";
          $this->mobile = "";
          $this->edudegree = "";
          $this->birthdate = "";
          $this->empdate = "";
        }
      }




    }

?>
   