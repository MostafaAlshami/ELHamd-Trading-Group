<?php
require_once(__ROOT__ . "controller/controller.php");
require_once(__ROOT__ . "controller/company_controller.php");
require_once(__ROOT__ . "controller/bankAcc_controller.php");

?>

<?php

class BookingController extends Controller
{

    function insertContract()
    {
        $contract_no = $_POST['contract_no'];
        $contract_date = $_POST['contract_date'];
        $status = $_POST['status'];
        $total_quantity = $_POST['total_quantity'];
        $shipment_date = $_POST['shipment_date'];
        $type = $_POST['type'];

        //$seller = $_POST['seller'];
        //$buyer = $_POST['buyer'];
        //$bankAcc = $_POST['bankAcc'];

        $this->model->addContract($contract_no, $contract_date, /*$seller, $buyer,*/ $status, 
                                 /*$bankAcc,*/ $total_quantity, $shipment_date, $type);
    }


    function editContract()
    {
        $contract_no = $_POST['contract_no'];
        $contract_date = $_POST['contract_date'];
        $status = $_POST['status'];
        $total_quantity = $_POST['total_quantity'];
        $shipment_date = $_POST['shipment_date'];
        $type = $_POST['type'];

        //$seller = $_POST['seller'];
        //$buyer = $_POST['buyer'];
        //$bankAcc = $_POST['bankAcc'];

        $this->model->updateContract($contract_no, $contract_date, /*$seller, $buyer,*/ $status, 
                                 /*$bankAcc,*/ $total_quantity, $shipment_date, $type);
    }


    function deleteContract()
    {
        $contract_no = $_POST['contract_no'];
        $this->model_>removeContract($contract_no);
    }

}
?>    