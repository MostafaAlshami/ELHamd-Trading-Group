<?php

require_once(__ROOT__ . "view/view.php");

class ViewProduct extends View{	
	public function output(){
		$str = "";
		foreach($this->model->getProducts() as $Product){
			
			$str.="<div class='image'>";
            $str.="</div>";
			$str.="<div  class='card-body'>";
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
	public function addCard()
	{   
	  $str="";
	  $str .= '<form action="product_add_public.php" method= "get">';
	  $str .= '<div class="card-header">';
	  $str .= '<h5 class="card-category"> Employees </h5>';
	  $str .= '<h4 class="card-title"> Add Employee </h4>';
	  $str .= '</div>';
  
	  $str .= '<div class="card-body"';
  
	  $str .= ' <div class="table-responsive"> <table class="table"> ';
  
	  $str .= ' <thead class=" text-primary"> ';
	  $str .= " <th> Product ID </th> <th></th> <th></th> ";
	  $str .= ' <th><input type="text" name="code"  class="form-control" placeholder=""></th> </thead> ';
  
	  $str .= " <tbody> ";       
	  
	  $str .= " <tr>";
	  $str .= " <td> Product Name </td> <td></td> <td></td> ";
	  $str .= ' <td><input type="text" name="prname"  class="form-control" placeholder=""></td> </tr> ';
	  
	  $str .= " <tr>";
	  $str .= " <td> Product description </td> <td></td> <td></td> ";
	  $str .= ' <td><input type="text" name="prdesc"   class="form-control" placeholder=""></td> </tr> ';
  
  
   
	  $str .= " <tr> ";
	  $str .= " <td> Picture URL </td> <td></td> <td></td> ";
	  $str .= ' <td><input type="url" name="pic"  class="form-control" placeholder=""></td> </tr> ';
  
  
	  $str .= " <tr> ";
	  $str .= " <td> Origin </td>  <td></td> <td></td> ";
	  $str .= ' <td><input type="text" name="origin"  class="form-control" placeholder=""></td> </tr> ';
  
	  $str .= " <td></td> ";
	  $str .= ' <td> <button type="submit" class="btn" name ="save" > Save </button> </td> ';  //SAVE ACTION
	  $str .= ' <td> <button class="btn" name="cancel" href="product_public.php"> Cancel </button> </td> ';  //CANCEL ACTION
  
	  $str .= " <td></td> </tr> ";
	  $str .= " </tbody> </table> ";
	  $str .= " </div> ";
	  $str .= " </form>";
  
	  return $str;
	}
  
}


?>