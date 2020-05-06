<?php
  require_once(__ROOT__ . "model/model.php");
  require_once(__ROOT__ . "model/Employees_model.php");

?>

<?php
class Department extends Model
{
    private $dep_id;
    private $dep_name;
    //public  $Employees;

    function __construct($dep_id, $dep_name="")
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
    public function setID($dep_id)
    {
        $this->dep_id = $dep_id;
        return $this;
    }

    public function getName()
    {
        return $this->dep_name;
    }
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