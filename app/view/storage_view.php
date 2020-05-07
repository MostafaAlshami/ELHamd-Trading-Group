<?php

require_once(__ROOT__ . "view/view.php");

class ViewStorage extends View{	
	public function output(){
$str="";
		foreach($this->model->getStorages() as $Storage){
			
			$str.="<div class='table-responsive'>";
            $str.="<table class='table'>";
			$str.="<thead class='text-primary'>";
			$str.="<th>Product ID</th>";
			$str.="<th><input type='String' class='form-control' placeholder='".$Storage->getProduct_name() ."' > </th>";  
			$str.="<th>Product Name</th>";
            $str.="<th><input type='String' class='form-control' placeholder='".$Storage->getproduct_id() ."' > </th>";  
            $str.="<th></th><th></th>";
            $str.="<th>Quantity</th>";
            $str.="<th><input type='number' class='form-control' placeholder='". $Storage->getquantity() ."'></th>";
            $str.="</thead>";

            $str.="<tbody>";
            $str.="<tr>";
            $str.="    <th>Date</th>";
            $str.= "<td><input type='date' class='form-control' placeholder=''></td>  ";                                     
            $str.=" <th>Quantity In</th>";
            $str.= "<td><input type='number' class='form-control' placeholder=''></td>";
            $str.= " <th>Quantity Out</th>";
            $str.= " <td><input type='number' class='form-control' placeholder=''></td>";
            $str.= " <th>Report</th>";
            $str.= " <td><input type='String' class='form-control' placeholder=''></td>";
            $str.="</tr>";
            $str.=" <tr>";
            $str.="    <td><button class=' btn'>Save</button></td><td></td>";
            $str.="  <td></td> <td></td>";
            $str.="  <td></td> <td></td>";
            $str.="  <td></td> <td></td>";
            $str.="  </tr>";
            $str.=" </tbody>";
            $str.=" </table>";
            $str.="</div>";
			"<tr>";
		}
		return $str;	
	}

}


?>