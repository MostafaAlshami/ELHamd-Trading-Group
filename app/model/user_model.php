<?php
  require_once(__ROOT__ . "model/model.php");
?>

<?php
class user_model extends model {

    private $userid;
    private $username;
    private $pass;
    private $empid;

    function __construct($userid,$username="",$pass="",$empid="") {
        $this->userid = $userid;
            $this->db = $this->connect();
    
        if(""===$username)
        {
          $this->readUser($userid);
        }
        else
        {
          $this->username = $username;
          $this->pass=$pass;
          $this->empid=$empid;
          
        }
      }

    function readUser($userid)
    {
        $sql = "SELECT * FROM user where ID=".$userid;
        $db = $this->connect();
        $result = $db->query($sql);
        if ($result->num_rows == 1){
            $row = $db->fetchRow();
            $this->username = $row["username"];
            $_SESSION["username"]=$row["username"];
            $this->pass=$row["password"];
            $this->empid=$row["emp_id"];
            
    }
    else {
        $this->username = "";
        $this->pass="";
        $this->empid="";
        
    }
  }
      

    public function getUserid()
    {
        return $this->userid;
    }

    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

   function getPass()
    {
        return $this->pass;
    }

    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
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
}