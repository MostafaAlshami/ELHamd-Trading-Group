<?php
require_once(__ROOT__ . "controller/controller.php");
require_once(__ROOT__ . "controller/product_controller.php");

?>

<?php

class CommodityController extends Controller
{
  public function insertComm()
  {
    //$product = $_POST['product'];
    $quantity = $_POST['quantity'];
    $unit_price = $_POST['unit_price'];
    $total_price = $_POST['total_price'];
    $package_weight = $_POST['package_weight'];
    $package_type = $_POST['package_type'];

    $this->model->insertCommodity(/*$product,*/$quantity, $unit_price, $package_weight, $package_type);
  }


  public function editComm()
  {
    $commm_id = $_GET['commm_id'];
    //$product = $_POST['product'];
    $quantity = $_POST['quantity'];
    $unit_price = $_POST['unit_price'];
    $total_price = $_POST['total_price'];
    $package_weight = $_POST['package_weight'];
    $package_type = $_POST['package_type'];

    $this->model->editCommodity($commm_id, /*$product,*/ $quantity, $unit_price, $package_weight, $package_type);
  }


  public function deleteComm()
  {
    $commm_id = $_GET['comm_id'];
    $this->model->deleteCommodity($commm_id);
  }
}
?>