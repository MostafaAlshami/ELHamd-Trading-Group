<?php
if (!isset($_SESSION)) {
    session_start();
}
require_once("../app/db/dbh.php");

abstract class Model
{
    protected $dbh;
    protected $conn;

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
  
    public function connect()
    {
        if (null === $this->conn) {
            $this->dbh = DBh::getInstance();        }
        return $this->dbh;
    }
}
