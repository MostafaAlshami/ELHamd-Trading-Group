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
          <input type="text" class="form-control" id="uname" placeholder="username" name="uname" >
        </div>
    </div>                     
      
    <div class="col-md-6 pr-1">
        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" id="psw" placeholder="password" name="psw" >
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
         </div>
    </div> 
</form>

      <form action="" method="post">
      <a href="forgetpassword_public.php">forget password</a></p> </form>



';
    return $str;
  }

  public function output2()
  {   
    $str="";
    $str = '<script src="../assets/js/forgetpass.js" type="text/javascript"></script>';

    $str .= '<form action="" method= "post">';
    $str .= '<div class="card-header">';
    $str .= '<h5 class="card-category"> Employees </h5>';
    $str .= '<h4 class="card-title"> Forget Password </h4>';
    $str .= '</div>';

    $str .= '<div class="card-body"';

    $str .= ' <div class="table-responsive"> <table class="table"> ';

    $str .= ' <thead class=" text-primary"> ';    

    $str .= " <tr>";
    $str .= " <td> National ID </td>  <td></td> <td></td> ";
    $str .= ' <td><input type="text" name="national" id="National" class="form-control" maxlength="14" placeholder=""></td> </tr> ';

    $str .= " <tr>";
    $str .= " <td> New Password </td>  <td></td> <td></td> ";
    $str .= ' <td><input type="text" name="newpass" id="NewPass" class="form-control" placeholder=""></td> </tr> ';

    $str .= " <tr> ";
    $str .= " <td></td> ";
    $str .= ' <td> <button type="submit" class="btn" name ="savec" onclick="return validateforgetpass()" > Request password </button> </td> ';  //SAVE ACTION
    $str .= ' <td> <button class="btn" name="cancel" href="employeesList.php"> Cancel </button> </td> ';  //CANCEL ACTION

    $str .= " <td></td> </tr> ";
    $str .= " </tbody> </table> ";
    $str .= " </div> ";
    $str .= " </form>";

    return $str;
  }

}
