<?php

require_once(__ROOT__ . "view/view.php");

class ViewStorage extends View{	
	public function output(){
		$str = "";
		$str.="<table>";
		$str.="<tr><th>Storage Name	</th><th>Storage PID </th><th>Storage Quantity</th></tr>";
		foreach($this->model->getStorages() as $Storage){
			$str.="<tr>";
			$str.="<td>".$Storage->getSID() ."  </td> ";
			$str.="<td>" . $Storage->getquantity() ."</td> ";
			$str.="<td>" . $Storage->getproduct_id() ."</td> ";
			$str.="</tr>";
			
		}
		return $str;
	}
}


?>