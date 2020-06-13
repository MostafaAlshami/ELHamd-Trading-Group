<?php

require_once(__ROOT__ . "view/view.php");

class ViewStorage extends View{
        
    public function output(){

        $str = "";
        $storages = $this->model->getStorages();
            $str .= "<div class='table-responsive'>";
            $str .= "<table class='table'>";
            $str .= "<form action='storage_add_public.php' method='get'>";

            $str .= "<thead class='text-primary'>";
            $str .= "<th>Product ID</th>";
            $str .= "<th><input required name=prid id='_product_id' type='text' class='form-control' placeholder='ID' value='' ></th>";
            $str .= "<th>Product Name</th>";
            $str .= "<th><input required name=prname id='_product_name' type='text' class='form-control' value='' ></th>";
            $str .= "<th></th><th></th>";
            $str .= "<th>Quantity</th>";
            $str .= "<th><input required name=prq id='_currentq' type='number' class='form-control' value=''></th>";
            $str .= "</thead>";

            $str .= "<tbody>";

            $str .= "<tr>";
            $str .= "<th>Date</th>";
            $str .= "<td><input required name=prd type='date' class='form-control' placeholder=''></td>  ";                                     
            $str.=" <th>Quantity In</th>";
            $str.= "<td><input required  name=prinq id='_inq'type='number' class='form-control' value=''></td>";
            $str.= " <th>Quantity Out</th>";
            $str.= " <td><input required  name=proutq id='_outq'type='number' class='form-control' value=''></td>";   
            $str .= "</tr>";

            $str .= "<tr>";
            $str .= "<td><button id='_submit' class='btn'>Add</button></td>";
            $str .= "</tr>";

            $str .= "</form>";
            $str .= "</tbody>";
            $str .= "</table>";
            $str .= "</div>";

        if (count($storages) <= 0)
        {
            $str .= "<div class='table-responsive'>No Items</div>";
        }
        else
        {
            $str = "<script type='text/javascript'>
           
                function UpdateStorage(sid) 
                {
                    var options = 
                    {
                        'SID': sid,
                        'product_name': $('#' + sid + '_product_name').val(),
                        'product_id': $('#' + sid + '_product_id').val(),
                        'currentq': $('#' + sid + '_currentq').val(),
                        'prd': $('#' + sid + '_prd').val(),
                        'inq': $('#' + sid + '_inq').val(),
                        'outq': $('#' + sid + '_outq').val()
                    }
                    $.post('storage_edit_public.php', options, function(data, status) { $('#' + sid + '_error_message').html(data); });
                }

                function DeleteStorage(sid) 
                {
                    var options = 
                    {
                        'SID': sid                        
                    }
                    $.post('storage_delete_public.php', options, function(data, status) { $('#' + sid + '_error_message').html(data); });
                    window.location.href = 'storage_public.php';
                }

                function AlertLowStorage(productName) 
                {
                    var notification = 
                    {
                        icon: 'now-ui-icons ui-1_bell-53',
                        message: 'Product ' + productName + ' is low on stock, Refill Advised.'
                    };
                    var options = 
                    {
                        type: 'primary',
                        timer: 1000,
                        placement: 
                        {
                            from: 'top',
                            align: 'right'
                        }
                    };

                    $.notify(notification, options);
                }
            </script>";

            $storages = $this->model->getStorages();
            $str .= "<div class='table-responsive'>";
            $str .= "<table class='table'>";
            $str .= "<form action='storage_add_public.php' method='get'>";
            
            $str .= "<thead class='text-primary'>";
            $str .= "<th>Product ID</th>";
            $str .= "<th><input required   name=prid id='_product_id' type='text' class='form-control' value='' ></th>";
            $str .= "<th>Product Name</th>";
            $str .= "<th><input required   name=prname id='_product_name' type='text' class='form-control' value='' ></th>";
            $str .= "<th>Quantity</th>";
            $str .= "<th><input required   name=prq id='_currentq' type='number' class='form-control' value=''></th>";
            $str .= "<th></th><th></th>";
            $str .= "</thead>";

            $str .= "<tbody>";

            $str .= "<tr>";
            $str .= "<th>Date</th>";
            $str .= "<td><input required   name=prd type='date' class='form-control' placeholder=''></td>  ";                                     
            $str.=" <th>Quantity In</th>";
            $str.= "<td><input required   name=prinq id='_inq'type='number' class='form-control' value=''></td>";
            $str.= " <th>Quantity Out</th>";
            $str.= " <td><input required   name=proutq id='_outq'type='number' class='form-control' value=''></td>";       
            $str .= "</tr>";

            $str .= "<tr>";
            $str .= "<td><button id='_submit' class='btn'>Add</button></td>";
            $str .= "</tr>";

            $str .= "</form>";
            $str .= "</tbody>";
            $str .= "</table>";
            $str .= "</div>";

            foreach($storages as $Storage)
            {
                $str .="<hr style='border: 1px solid orange;' />";

                $SID = $Storage->getSID();
                $productName = $Storage->getProduct_name();
                $current = $Storage->getcurrentq();
                
                $str .= "<div class='table-responsive'>";
                $str .= "<table class='table'>";
                $str .= "<thead class='text-primary'>";
                $str .= "<th>Product ID</th>";
                $str .= "<th><input required  name='prid' id='" . $SID . "_product_id' type='text' class='form-control' value='" . $Storage->getproduct_id() . "' ></th>";
                $str .= "<th>Product Name</th>";
                $str .= "<th><input required   name='prname' id='" . $SID . "_product_name' type='text' class='form-control' value='" . $productName . "' ></th>";
                $str .= "<th>Quantity</th>";
                $str .= "<th><input required   name='prq' id='" . $SID . "_currentq' type='number' class='form-control' value='". $current ."'></th>";
                $str .= "<th></th><th></th>";
                $str .= "<form action='Create_PDF.php' method='post'>";
                $str .= "<input type='hidden' name='prid' id='" . $SID . "_product_id'  value='" . $Storage->getproduct_id() . "'>";
                $str .= "<input type='hidden' name='prname' id='" . $SID . "_product_name'  value='" . $productName . "'>";
                $str .= "<input type='hidden' name='prq' id='" . $SID . "_currentq'  value='". $current ."'>";
                $str .= "<input type='hidden' name='prd' id='" . $SID . "_prd'  value='". $Storage->getdate() ."'>";
                $str .= "<input type='hidden' name='prqin' id='" . $SID . "_inq'  value='". $Storage->getInq() ."'>";
                $str .= "<input type='hidden' name='prqout' id='" . $SID . "_outq'  value='". $Storage->getOutq() ."'>";
                $str .= "<td><input type=submit value=Report class='btn' ></td>";
                $str .= "</form>";
                $str .= "</thead>";
              
                $str .= "<tbody>";
              
                $str .= "<tr>";
                $str .= "<th>Date</th>";
                $str .= "<td><input required   name='prd' id='" . $SID . "_prd'type='date' class='form-control' value='". $Storage->getdate() ."'></td>  ";                                     
                $str.=" <th>Quantity In</th>";
                $str.= "<td><input required   name='prqin' id='" . $SID . "_inq'type='number' class='form-control' value='". $Storage->getInq() ."'></td>";
                $str.= " <th>Quantity Out</th>";
                $str.= " <td><input required   name='prqout' id='" . $SID . "_outq'type='number' class='form-control' value='". $Storage->getOutq() ."'></td>";
              
                $str .= "</tr>";
                $str .= "<tr>";
                $str .= "<td><button id='" . $SID . "_submit' class='btn' onclick='UpdateStorage(" . $SID . ")'> Modify </button> </td>
                        <td id='" . $SID . "_error_message' colspan='7'><button id='" . $SID . "_submit' class='btn' onclick='DeleteStorage(" . $SID . ")'> Delete </button></td>
                        <td id='" . $SID . "_error_message' colspan='7'></td>";
                
                $str .= "</tr>";

               
                $str .= "</tbody>";
                $str .= "</table>";
                $str .= "</div>";

                if ($current < 100) 
                {
                    $str .= "<script type='text/javascript'>window.setTimeout(function () { AlertLowStorage('" . $productName . "') }, 100);
                    </script>";
                }
            }
        }
        return $str;
    }
    }


?>