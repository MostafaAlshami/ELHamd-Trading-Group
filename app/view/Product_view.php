<?php

require_once(__ROOT__ . "view/view.php");

class ViewProduct extends View{	
	public function output(){
		$str = "";
		foreach($this->model->getProducts() as $Product){
			
			$str.="<div class='image'>";
            $str.="</div>";
			$str.="<div class='card-body'>";
			$str.="<div class='author'>";
            $str.="<img class='avatar border-gray' src=".$Product->getpic()." alt='...'>";
            $str.="<h5 class='title'>".$Product->getname()."</h5>";
			$str.="<p style='font-family:Helvetica; color:black; font-size:20px' class='description'>";
			$str.=$Product->getorigin();
            $str.="</p>";
			$str.="</div>";
            $str.="<p style='font-family:Helvetica; color:black; font-size:16px'class='description text-center'>";
            $str.="<b>". $Product->getdescription() ."</b> <br>";
            $str.="</p>";
			$str.="</div>";
			$str .="<hr style='border: 1px solid orange;' />";
		}
		return $str;
	}
}


?>