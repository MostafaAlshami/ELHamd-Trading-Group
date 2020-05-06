<?php
  require_once(__ROOT__ . "model/model.php");
  require_once(__ROOT__ . "model/Employees_model.php");

?>

<?php
<<<<<<< HEAD
class Department extends Model
{
    private $dep_id;
    private $dep_name;
    //public  $Employees;

    function __construct($dep_id, $dep_name="")
=======
class Department extends Model{
    private $Dep_id;
    private $Dep_Name;
    public $Employees;

 

    /**
     * Get the value of Dep_id
     */ 
    public function getDep_id()
>>>>>>> 94306c048e9783ba89d386035a3803933305e67d
    {
        $this->dep_id = $dep_id;   
        $this->dbh = $this->connect();

        if("" === $dep_id)
        {
            $this->readDepartment($dep_id);
        }
        else
        {
            $this->dep_id = $dep_id;   
            $this->dep_name = $dep_name;   
        }
    }

    function readDepartment($dep_id)
    {
        $sql = "SELECT * FROM department WHERE dep_id=".$dep_id;
        $dbh = $this->connect();
        $result = $dbh->query($sql);

       if($result->num_rows == 1)
       {
           $row = $dbh->fetchRow();
           $this->dep_name = $row["dep_name"];
       }
       else
       {
        $this->dep_name = "";
       }
    }


    public function getID()
    {
        return $this->dep_id;
    }
<<<<<<< HEAD
    public function setID($dep_id)
    {
        $this->dep_id = $dep_id;
        return $this;
    }

    public function getName()
=======

    /**
     * Set the value of Dep_id
     *
     * @return  self
     */ 
    public function setDep_id($Dep_id)
    {
        $this->Dep_id = $Dep_id;

        return $this;
    }

    /**
     * Get the value of Dep_Name
     */ 
    public function getDep_Name()
>>>>>>> 94306c048e9783ba89d386035a3803933305e67d
    {
        return $this->dep_name;
    }
<<<<<<< HEAD
    public function setName($dep_name)
    {
        $this->dep_name = $dep_name;
        return $this;
    }


    //public function searchCompanies(){}
    //public function viewCompany(){}
    //public function getCompaniesList(){}

}

?>
=======

    /**
     * Set the value of Dep_Name
     *
     * @return  self
     */ 
    public function setDep_Name($Dep_Name)
    {
        $this->Dep_Name = $Dep_Name;

        return $this;
    }
}
>>>>>>> 94306c048e9783ba89d386035a3803933305e67d
