<?php

require_once(__ROOT__ . "controller/controller.php");

class ProductController extends Controller
{ 
  public function insertPr()
  {
    $prid = $_REQUEST['prid'];
    $prname = $_REQUEST['prname'];
    $prdesc = $_REQUEST['prdesc'];
    $pic = $_REQUEST['pic'];
    $prorigin = $_REQUEST['prorigin'];
 

    $this->model->insertProduct($prid, $prname, $prdesc, $pic, $prorigin);
  }  

  public function editPr()
  {
    $prid = $_REQUEST['prid'];  
    $prname = $_REQUEST['prname'];
    $prdesc = $_REQUEST['prdesc'];
    $pic = $_REQUEST['pic'];
    $prorigin = $_REQUEST['prorigin'];

    $this->model->editProduct($prid, $prname, $prdesc, $pic, $prorigin);
  }
  
  public function deletePr()
  {
    $prid = $_REQUEST ['$prid'];
    $this->model->deleteProduct($prid);
  }


}
?>