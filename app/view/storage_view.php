<?php

require_once(__ROOT__ . "view/view.php");

class ViewStorage extends View{    
    public function output(){
        $str = "<script type='text/javascript'>
            function UpdateStorage(sid) {
                var options = {
                    'SID': sid,
                    'product_name': $('#' + sid + '_product_name').val(),
                    'product_ID': $('#' + sid + '_product_ID').val(),
                    'quantity': $('#' + sid + '_quantity').val()
                }
                $.post('storage_edit_public.php', options, function(data, status) { $('#' + sid + '_error_message').html(data); });
            }
        </script>";
        foreach($this->model->getStorages() as $Storage) {
            $SID = $Storage->getSID();
            $str .= "<div class='table-responsive'>";
            $str .= "<table class='table'>";
            $str .= "<thead class='text-primary'>";
            $str .= "<th>Product ID</th>";
            $str .= "<th><input id='" . $SID . "_product_ID' type='text' class='form-control' value='" . $Storage->getproduct_id() . "' ></th>";
            $str .= "<th>Product Name</th>";
            $str .= "<th><input id='" . $SID . "_product_name' type='text' class='form-control' value='" . $Storage->getProduct_name() . "' ></th>";
            $str .= "<th></th><th></th>";
            $str .= "<th>Quantity</th>";
            $str .= "<th><input id='" . $SID . "_quantity' type='number' class='form-control' value='". $Storage->getquantity() ."'></th>";
            $str .= "</thead>";
            $str .= "<tbody>";
            $str .= "<tr>";
            $str .= "<th>Date</th>";
            $str .= "<td><input type='date' class='form-control' placeholder=''></td>  ";                                     
            $str .= "<th>Quantity In</th>";
            $str .= "<td><input type='number' class='form-control' placeholder=''></td>";
            $str .= "<th>Quantity Out</th>";
            $str .= "<td><input type='number' class='form-control' placeholder=''></td>";
            $str .= "<th>Report</th>";
            $str .= "<td><input type='text' class='form-control' placeholder=''></td>";
            $str .= "</tr>";
            $str .= "<tr>";
            $str .= "<td><button id='" . $SID . "_submit' class='btn' onclick='UpdateStorage(" . $SID . ")'>Save</button></td><td id='" . $SID . "_error_message' colspan='7'></td>";
            $str .= "</tr>";
            $str .= "</tbody>";
            $str .= "</table>";
            $str .= "</div>";
        }
        return $str;
    }

}


?>