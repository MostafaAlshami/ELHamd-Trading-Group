<?php

require_once(__ROOT__ . "view/view.php");

class ViewProduct extends View{	
	public function output(){
		$str = "";
		$str.="<a href='profile.php'>Back to Profile </a>";
		$str.="<table>";
		$str.="<tr><th>Name</th><th>Year</th></tr>";
		foreach($this->model->getProducts() as $Product){
			$str.="<tr>";
			$str.="<td>".$Product->getPrname() ."  </td> ";
			$str.="<td>" . $Product->getPrdesc() ."</td> ";
			$str.="<td>" . $Product->getProrigin() ."</td> ";
			$str.='"<td>"<a href=MDemo.php?id=' . $Product->getPrid() .'>Edit</a>"</td> "';
			$str.='"<td>"<a href=MMDemo.php?id=' . $Product->getPrid() .'>Delete</a>"</td> "';

			$str.="</tr>";
		}
	}
}


?>