function validateforgetpass() {
    var national = document.getElementById("National").value;
    var newpassword = document.getElementById("NewPass").value;


    if(national == "" )
     {
          alert("National ID cannot be empty");
          
          document.getElementById("National").style.borderColor = "red";
          return false;
  
    }
    else if(national.length < 14)
    {
        alert("National ID is too short");
          
          document.getElementById("National").style.borderColor = "red";
          return false;
    }
    else if(national.length > 15)
    {
        alert("National ID is too long");
          
          document.getElementById("National").style.borderColor = "red";
          return false;
    }
  
    if(newpassword == ""){
        alert("password cannot be empty");
        document.getElementById("NewPass").style.borderColor = "red";
        return false;
    }
    else if(newpassword.length < 2)
    {
        alert("Password is short");
            document.getElementById("NewPass").style.borderColor = "red";
            return false;
    }
    else if(newpassword.length > 30)
    {
        alert("Password is long");
            document.getElementById("NewPass").style.borderColor = "red";
            return false;
    }




}