<?php
require_once(__ROOT__ . "controller/controller.php");

?>

<?php

class BankAccountController extends controller
{
    public function insertAcc()
    {
        $bank_name = $_POST['bank_name'];
        $bank_branch = $_POST['bank_branch'];
        $benef_name = $_POST['benef_name'];
        $acc_no = $_POST['acc_no'];
        $swift_code = $_POST['swift_code'];
        $fax = $_POST['fax'];
        $address = $_POST['address'];
        $phone_no = $_POST['phone_no'];

        $this->model->insertBankAcc($bank_name, $bank_branch, $benef_name, $acc_no, $swift_code, $fax, $address, $phone_no);
    }


    public function editAcc()
    {
        $acc_id = $_GET['acc_id'];
        $bank_name = $_POST['bank_name'];
        $bank_branch = $_POST['bank_branch'];
        $benef_name = $_POST['benef_name'];
        $acc_no = $_POST['acc_no'];
        $swift_code = $_POST['swift_code'];
        $fax = $_POST['fax'];
        $address = $_POST['address'];
        $phone_no = $_POST['phone_no'];

        $this->model->editBankAcc($acc_id, $bank_name, $bank_branch, $benef_name, $acc_no, $swift_code, $fax, $address, $phone_no);
    }


    public function deleteComp()
   {
    $acc_id = $_GET['acc_id'];
    $this->model->deleteBankAcc($acc_id);
   }

}

?>
