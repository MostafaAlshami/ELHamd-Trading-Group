<?php

require_once(__ROOT__ . "view/view.php");

class ViewStorage extends View{	
	public function output(){
		$str = "";
		$str.="<a href='profile.php'>Back to Profile </a>";
		$str.="<table>";
		$str.="<tr><th>Name</th><th>Year</th></tr>";
		foreach($this->model->getStorage() as $Storage){
			$str.="<tr>";
			$str.="<td>".$Storage->getStorageID() ."  </td> ";
			$str.="<td>" . $Storage->getProduct_ID() ."</td> ";
			$str.="<td>" . $Storage->getquantity()() ."</td> ";
			$str.="</tr>";
		}
	}
}


?>