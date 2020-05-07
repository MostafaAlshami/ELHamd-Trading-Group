<?php
  require_once(__ROOT__ . "model/model.php");
  require_once(__ROOT__ . "model/Employee_model.php");
?>

<?php

class Employees extends Model {
    public $employees;

  function __construct() {
      $this->fillArray();
  }

  function fillArray() {
    $this->employees = array();
    $this->dbh = $this->connect();
    $result = $this->readEmployees();

    while ($row = $result->fetch_assoc())
    {
     array_push($this->employees, new Employee($row["ID"]));
    }
    
  }

  function getEmployees() 
  {
    return $this->employees;
  }

  function readEmployees(){
    $sql = "SELECT * FROM employee";
    
    $result = $this->dbh->query($sql);
    if ($result->num_rows > 0){
        return $result;
    }
    else {
        return false;
    }
  }

  function insertEmployee($first_name, $last_name,$email,$address,$mobile,$DoB,$Degree,$EmpDate,$salary){
    $first_name = $this->dbh->getConn()->real_escape_string($first_name);
    $last_name = $this->dbh->getConn()->real_escape_string($last_name);
    $email = $this->dbh->getConn()->real_escape_string($email);
    $address = $this->dbh->getConn()->real_escape_string($address);
    $mobile = $this->dbh->getConn()->real_escape_string($mobile);
    $DoB = $this->dbh->getConn()->real_escape_string($DoB);
    $Degree = $this->dbh->getConn()->real_escape_string($Degree);
    $EmpDate = $this->dbh->getConn()->real_escape_string($EmpDate);
    $salary = $this->dbh->getConn()->real_escape_string($salary);

    $sql = "INSERT INTO employee (First_Name, Last_Name, email, address, mobile, DOB, degree, emp_date, salary)
    VALUES ('$first_name', '$last_name', '$email', '$address', '$mobile', '$DoB', '$Degree', '$EmpDate', '$salary')";

   if($this->dbh->query($sql) === true)
   {
     echo "Record inserted successfully.";
   }
   else
   {  
     echo "ERROR: Could not execute $sql. " . $conn->error;
   }

}

  function editEmployee($id,$first_name,$last_name,$email,$address,$mobile,$DoB,$Degree,$EmpDate,$salary)
  {
    $first_name = $this->dbh->getConn()->real_escape_string($first_name);
    $last_name = $this->dbh->getConn()->real_escape_string($last_name);
    $email = $this->dbh->getConn()->real_escape_string($email);
    $address = $this->dbh->getConn()->real_escape_string($address);
    $mobile = $this->dbh->getConn()->real_escape_string($mobile);
    $DoB = $this->dbh->getConn()->real_escape_string($DoB);
    $Degree = $this->dbh->getConn()->real_escape_string($Degree);
    $EmpDate = $this->dbh->getConn()->real_escape_string($EmpDate);
    $salary = $this->dbh->getConn()->real_escape_string($salary);

    $sql = "UPDATE employee SET `First_Name`='$first_name', `Last_Name`='$last_name', `email`='$email', `address`='$address',`mobile`='$mobile', `DOB`='$DoB',
     `degree`='$Degree', `emp_date`='$EmpDate', `salary`='$salary', WHERE ID = $id";

    if($this->dbh->query($sql) === true)
    {
      echo "Records updated successfully.";
    }
    else
    {  
      echo "ERROR: Could not execute $sql. " . $conn->error;
    }

  }

  function deleteEmployee($id)
  {
    $sql="DELETE FROM employee WHERE ID = $id";
       
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

//   function EmployeeStats($first_name,$last_name,$mobile,$salary)
//   {
//     $sql = "SELECT * FROM user  JOIN  employee ON user.emp_ID = employee.ID";
                                            
//       $result = mysqli_query($conn, $q);
//       if(mysqli_num_rows($result) > 0)
//       {
//       while($row = mysqli_fetch_array($result))
//       {
//        $first_name = $row['First_Name'];
//        $last_name = $row['Last_Name'];
//        $mobile = $row['mobile'];
//        $salary = $row['salary'];
         
//   }

// }
//   }
  
}
?>
