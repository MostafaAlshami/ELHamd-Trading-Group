<?php

require_once(__ROOT__ . "controller/controller.php");

class StorageController extends controller
{
  public function insertSt()
  {
    $product_id = $_REQUEST['product_id'];
    $quantity = $_REQUEST['quantity'];


    $this->model->insertStorage($product_id, $quantity);
  }  

  public function editSt()
  {
    $SID = $_REQUEST['SID'];
    $product_id = $_REQUEST['product_id'];
    $quantity = $_REQUEST['quantity']; 

    $this->model->editStorage($SID, $product_id, $quantity);
  }
  
  public function deleteSt()
  {
    $SID = $_REQUEST ['SID'];
    $this->model->deleteStorage($SID);
  }


}
?>