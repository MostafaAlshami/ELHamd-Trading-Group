<?php

require_once(__ROOT__ . "view/View.php");

class user_view extends View
{

  function output()
  {
    $str = " <script type='text/javascript'>
      function LoginFailed() {
                          var notification = {
                              icon: 'now-ui-icons ui-1_bell-53',
                              message: 'Login  Failed. Please try again.'
                          };
                          var options = {
                              type: 'primary',
                              timer: 0,
                              placement: {
                                  from: 'top',
                                  align: 'right'
                              }
                          };
      
                          $.notify(notification, options);
                      }
      </script>";
    $str = '<script src="../assets/js/login.js" type="text/javascript"></script>';

    $str = '    <form action="login_public.php?action=signin" method="post">

    <div class="col-md-6 pr-1">
        <div class="form-group">
          <label>Username</label>
          <input type="text" class="form-control" id="uname" placeholder="username" name="uname" required>
        </div>
    </div>                     
      
    <div class="col-md-6 pr-1">
        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" id="psw" placeholder="password" name="psw" required>
        </div>  
        <div>
          <label> 
              <input type="checkbox" checked="checked" name="remember"> Keep me logged In
          </label>
        </div> 
    </div>

    <div class="col-md-6 pr-1">
         <div class="form-group">
            <button type="submit" name="login" class="btn" onclick="return validateform()">Login</button>
            <button type="submit" class="btn">Forget Password</button>
         </div>
    </div> 
</form>';
    return $str;
  }
}
