<?php

require_once(__ROOT__ . "controller/controller.php");

class StorageController extends controller
{
  public function insertSt()
  {
    $product_name = $_REQUEST['product_name'];
    $product_id = $_REQUEST['product_id'];
    $currentq = $_REQUEST['currentq'];
    $inq = $_REQUEST['inq'];
    $outq = $_REQUEST['outq'];


    $this->model->insertStorage();
  }  

  public function editSt()
  {
    $SID = $_REQUEST['SID'];
    $product_name = $_REQUEST['product_name'];
    $product_id = $_REQUEST['product_id'];
    $currentq = $_REQUEST['currentq'];
    $inq = $_REQUEST['inq'];
    $outq = $_REQUEST['outq'];

    $this->model->editProduct($SID, $product_name, $product_id, $currentq, $inq, $outq);
  }
  
  public function deleteSt()
  {
    $SID = $_REQUEST ['SID'];
    $this->model->deleteStorage($SID);
  }


}
?>