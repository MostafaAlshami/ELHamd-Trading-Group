<?php

require_once(__ROOT__ . "controller/controller.php");

class StorageController extends controller
{
  public function insertSt()
  {
    $product_name = $_REQUEST['prname'];
    $product_id = $_REQUEST['prid'];
    $currentq = $_REQUEST['prq'];
    $date = $_REQUEST['prd'];
    $inq = $_REQUEST['prinq'];
    $outq = $_REQUEST['proutq'];

    $this->model->insertStorage($product_name, $product_id, $currentq, $date, $inq, $outq);
  }  

  public function editSt()
  {
    $SID = $_REQUEST['SID'];
    $product_name = $_REQUEST['product_name'];
    $product_id = $_REQUEST['product_id'];
    $currentq = $_REQUEST['currentq'];
    $date = $_REQUEST['prd'];
    $inq = $_REQUEST['inq'];
    $outq = $_REQUEST['outq'];

    $this->model->editProduct($SID, $product_name, $product_id, $currentq, $date, $inq, $outq);

  }
  
  public function deleteSt()
  {
    $SID = $_REQUEST ['SID'];
    $this->model->deleteProduct($SID);
  }

  
}
?>