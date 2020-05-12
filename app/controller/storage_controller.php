<?php

require_once(__ROOT__ . "controller/controller.php");

class StorageController extends controller
{
  public function insertSt()
  {
    $product_ID = $_REQUEST['product_ID'];
    $product_ID = $_REQUEST['product_ID'];
    $quantity = $_REQUEST['product_ID'];


    $this->model->insertStorage();
  }  

  public function editSt()
  {
    $SID = $_REQUEST['SID'];
    $product_name = $_REQUEST['product_name'];
    $product_ID = $_REQUEST['product_ID'];
    $quantity = $_REQUEST['quantity'];

    $this->model->editStorage($SID, $product_name, $product_ID, $quantity);
  }
  
  public function deleteSt()
  {
    $SID = $_REQUEST ['SID'];
    $this->model->deleteStorage($SID);
  }
}
?>