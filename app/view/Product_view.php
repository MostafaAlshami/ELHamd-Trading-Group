<?php

require_once(__ROOT__ . "view/view.php");

class ViewProduct extends View{	
	public function output(){
		$str = "";
		$str.="<table>";
		$str.="<tr><th>Product Name</th><th>Product Description</th><th>Product Origin</th><th>Product Picture</th></tr>";
		foreach($this->model->getProducts() as $Product){
			$str.="<tr>";
			$str.="<td>".$Product->getname() ."  </td> ";
			$str.="<td>" . $Product->getdescription() ."</td> ";
			$str.="<td>" . $Product->getorigin() ."</td> ";
			$str.="</tr>";
			
		}
		return $str;
	}
}


?>