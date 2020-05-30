<?php
require_once(__ROOT__ . "controller/controller.php");
require_once(__ROOT__ . "controller/company_controller.php");

?>

<?php

class BookingController extends Controller
{
  function insertShBooking()
  {
    //$shippingLine = $_POST['shippingLine'];
    $shipping_date = $_POST['shipping_date'];
    $landing_port = $_POST['shipping_date'];
    $discharge_port = $_POST['discharge_port'];
    $container_no = $_POST['container_no'];
    $ship_name = $_POST['ship_name'];
    $trip_no = $_POST['trip_no'];
    $billOf_landing = $_POST['billOf_landing'];

    $this->model->insertBooking(/*$shippingLine,*/ $shipping_date, $landing_port, $discharge_port,
                                $container_no, $ship_name, $trip_no, $billOf_landing);
  }


  function editShBooking()
  {
    $shipping_id = $_GET['shipping_id'];
    //$shippingLine = $_POST['shippingLine'];
    $shipping_date = $_POST['shipping_date'];
    $landing_port = $_POST['shipping_date'];
    $discharge_port = $_POST['discharge_port'];
    $container_no = $_POST['container_no'];
    $ship_name = $_POST['ship_name'];
    $trip_no = $_POST['trip_no'];
    $billOf_landing = $_POST['billOf_landing'];

    $this->model->editBooking($shipping_id, /*$shippingLine,*/ $shipping_date, $landing_port, $discharge_port,
                                $container_no, $ship_name, $trip_no, $billOf_landing);
  }


  public function deleteShBooking()
  {
    $shipping_id = $_GET['shipping_id'];
    $this->model->deleteShipping($shipping_id);
  }

}
?>