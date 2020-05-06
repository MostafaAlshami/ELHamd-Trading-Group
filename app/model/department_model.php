<?php
  require_once(__ROOT__ . "model/model.php");
  require_once(__ROOT__ . "model/Employees_model.php");

?>

<?php
class Department extends Model{
    private $Dep_id;
    private $Dep_Name;
    public $Employees;

 

    /**
     * Get the value of Dep_id
     */ 
    public function getDep_id()
    {
        return $this->Dep_id;
    }

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
    {
        return $this->Dep_Name;
    }

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