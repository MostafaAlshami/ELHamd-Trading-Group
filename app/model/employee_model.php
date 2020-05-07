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

  function __construct($empid,$empfirstname="",$emplastname="",$email="",$address="",$dep="",$mobile="",$birthdate="",$edudegree="",$empdate="",$salary="",$compid="") 
  {
    $this->empid = $empid;
	$this->db = $this->connect();

    if(""===$empfirstname)
    {
      $this->readEmployee($empid);
    }
    else
    {

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
    }

    function readEmployee($empid)
    {
        $sql = "SELECT * FROM user  JOIN  employee ON user.emp_ID = employee.ID WHERE user.emp_ID='$empid'";
        $db = $this->connect();
        $result = $db->query($sql);

        if($result->num_rows == 1)
        {
          $row = $db->fetchRow();
          $this->empfirstname = $row["First_Name"];
          $this->emplastname = $row["Last_Name"];
          $this->email = $row["email"];
          $this->address = $row["address"];
          $this->dep = $row["Dep"];
          $this->mobile = $row["mobile"];
          $this->birthdate = $row["DOB"];
          $this->edudegree = $row["degree"];
          $this->empdate = $row["emp_date"];
          $this->salary = $row["salary"];
          $this->compid = $row["comp_id"];

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

        }
      }





    /**
     * Get the value of dep
     */ 
    public function getDep()
    {
        return $this->dep;
    }

    /**
     * Set the value of dep
     *
     * @return  self
     */ 
    public function setDep($dep)
    {
        $this->dep = $dep;

        return $this;
    }

    /**
     * Get the value of compid
     */ 
    public function getCompid()
    {
        return $this->compid;
    }

    /**
     * Set the value of compid
     *
     * @return  self
     */ 
    public function setCompid($compid)
    {
        $this->compid = $compid;

        return $this;
    }

    /**
     * Get the value of empdate
     */ 
    public function getEmpdate()
    {
        return $this->empdate;
    }

    /**
     * Set the value of empdate
     *
     * @return  self
     */ 
    public function setEmpdate($empdate)
    {
        $this->empdate = $empdate;

        return $this;
    }
    }


   
