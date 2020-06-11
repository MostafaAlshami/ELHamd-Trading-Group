<?php

require_once(__ROOT__ . "controller/Controller.php");

class users_controller extends Controller{
	public function insert() {
		$username = $_REQUEST['username'];
		$pass = $_REQUEST['password'];
		$empid = $_REQUEST['emp_id'];

		$this->model->registerUser($username, $pass, $empid);
    }
	
	public function signin()
	{
		$username = $_REQUEST['uname'];
		$pass = $_REQUEST['psw'];
		
		$this->model->login($username,$pass);
	}

	public function forget()
	{
		$national=$_REQUEST['ForgetPass'];
		$newpass=$_REQUEST['NewPass'];

		$this->model->forgetpassword($national,$newpass);


	}

}