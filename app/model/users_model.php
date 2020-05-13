<?php
require_once(__ROOT__ . "model/model.php");
require_once(__ROOT__ . "model/user_model.php");
if (!isset($_SESSION)) {
    session_start();
}
class users_model extends model
{
    private $users;
    function __construct()
    {
        $this->fillArray();
    }

    function fillArray()
    {
        $this->users = array();
        $this->db = $this->connect();
        $result = $this->readUsers();
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                array_push($this->users, new user_model($row["ID"], $row["username"], $row["password"], $row["emp_ID"]));
            }
        }
    }

    function getUsers()
    {
        return $this->users;
    }

    function readUsers()
    {
        $sql = "SELECT * FROM user";

        $result = $this->db->query($sql);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

    function registerUser($username, $pass, $empid)
    {
        $pass_hash = password_hash($pass, PASSWORD_BCRYPT);
        $sql = "INSERT INTO user (username, password, emp_id) VALUES ('$username','$pass_hash', '$empid')";
        if ($this->db->query($sql) === true) {
            echo "Records inserted successfully.";
            $this->fillArray();
        } else {
            echo "ERROR: Could not able to execute $sql. " . $this->conn->error;
        }
    }

    function login($username, $pass)
    {
        $sql = "Select * from user where username='" . "$username" . "'";
        $result = $this->db->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($pass, $row['password'])) {
                $_SESSION["ID"] = $row["ID"];
                $_SESSION["type"] = $row["type"];
                $_SESSION["emp_ID"] = $row["emp_ID"];
                $_SESSION["username"] = $row["username"];
                header("location: dashboard.php");
            }
        }
        else
        {
            echo "Login Failed";
            header("location:login_public.php");
        }
        
    }
}
