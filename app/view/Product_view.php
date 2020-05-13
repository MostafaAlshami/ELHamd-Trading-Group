<?php

require_once(__ROOT__ . "view/view.php");

class ViewProduct extends View{	
	public function output(){
		$str = "";
		foreach($this->model->getProducts() as $Product){
			$str.="<div class='card-body'>";
			$str.="<div class='author'>";
            $str.="<img class='avatar border-gray' src='..//Products/unnamed.jpg' alt='...'>";
            $str.="<h5 class='title'>".$Product->getname()."</h5>";
			$str.="<p class='description'>";
			$str.=$Product->getorigin();
            $str.="</p>";
			$str.="</div>";
            $str.="<p class='description text-center'>";
            $str.="<b>. $Product->getdescription() .</b> <br>";
            $str.="</p>";
            $str.="</div>";
			$str.="</div>";
			$str.="</div>";
		}
		return $str;
	}
}


?>