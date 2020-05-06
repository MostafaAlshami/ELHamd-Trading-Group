<?php

require_once(__ROOT__ . "view/View.php");

class user_view extends View{

    function output(){
		$str='<form action="login_public.php" method="post">

        <div class="col-md-6 pr-1">
            <div class="form-group">
              <label>Username</label>
              <input type="text" class="form-control" placeholder="username" name="uname" required>
            </div>
        </div>                     
          
        <div class="col-md-6 pr-1">
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" placeholder="password" name="psw" required>
            </div>  
            <div>
              <label> 
                  <input type="checkbox" checked="checked" name="remember"> Keep me logged In
              </label>
            </div> 
        </div>

        <div class="col-md-6 pr-1">
             <div class="form-group">
                <button type="submit" name="login" class="btn">Login</button>
                <button type="submit" class="btn">Forget Password</button>
             </div>
        </div> 
    </form>';
		return $str;
	}

}