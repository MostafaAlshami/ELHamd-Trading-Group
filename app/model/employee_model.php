<?php
  require_once(__ROOT__ . "model/model.php");
?>

<?php
class Employee extends Model{
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

  function __construct($empid,$empfirstname="",$emplastname="",$birthdate="",$mobile="",$address="",$edudegree="",$empdata="",$salary="",$email="") {
    $this->empid = $empid;
	    $this->db = $this->connect();

    if(""===$empname){
      $this->readUser($empid);
    }else{

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


    /**
     * Get the value of empid
     */ 
    public function getEmpid()
    {
        return $this->empid;
    }

    /**
     * Set the value of empid
     *
     * @return  self
     */ 
    public function setEmpid($empid)
    {
        $this->empid = $empid;

        return $this;
    }

    /**
     * Get the value of birthdate
     */ 
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set the value of birthdate
     *
     * @return  self
     */ 
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get the value of phone
     */ 
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set the value of phone
     *
     * @return  self
     */ 
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get the value of address
     */ 
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */ 
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get the value of edudegree
     */ 
    public function getEdudegree()
    {
        return $this->edudegree;
    }

    /**
     * Set the value of edudegree
     *
     * @return  self
     */ 
    public function setEdudegree($edudegree)
    {
        $this->edudegree = $edudegree;

        return $this;
    }

    /**
     * Get the value of empdata
     */ 
    public function getEmpdata()
    {
        return $this->empdata;
    }

    /**
     * Set the value of empdata
     *
     * @return  self
     */ 
    public function setEmpdata($empdata)
    {
        $this->empdata = $empdata;

        return $this;
    }

    /**
     * Get the value of salary
     */ 
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Set the value of salary
     *
     * @return  self
     */ 
    public function setSalary($salary)
    {
        $this->salary = $salary;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of empfirstname
     */ 
    public function getEmpfirstname()
    {
        return $this->empfirstname;
    }

    /**
     * Set the value of empfirstname
     *
     * @return  self
     */ 
    public function setEmpfirstname($empfirstname)
    {
        $this->empfirstname = $empfirstname;

        return $this;
    }

    /**
     * Get the value of emplastname
     */ 
    public function getEmplastname()
    {
        return $this->emplastname;
    }

    /**
     * Set the value of emplastname
     *
     * @return  self
     */ 
    public function setEmplastname($emplastname)
    {
        $this->emplastname = $emplastname;

        return $this;
    }

    function readEmployee($empid)
    {
        $sql = "SELECT * FROM user  JOIN  employee ON user.emp_ID = employee.ID WHERE user.emp_ID='$id'";
        $db = $this->connect();
        $result = $db->query($sql);

        if($result->num_rows == 1)
        {
          $row = $db->fetchRow();
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


   
} 