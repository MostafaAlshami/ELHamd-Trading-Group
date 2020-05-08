<?php
session_start();
require_once("../app/db/dbh.php");

abstract class Model
{
    protected $dbh;
    protected $conn;

    public function connect()
    {
        if(null === $this->conn)
        {
            $this->dbh = new Dbh();
        }
        return $this->dbh;
    }
}
