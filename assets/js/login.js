function validateform() {
    var username = document.getElementById("uname").value;
    var password = document.getElementById("psw").value;
    
  
       if (username.match(/^[0-9]+$/) != null){
       alert("username must be filled");
       document.getElementById("uname").style.borderColor = "red";
          return false;
       }
  
     if(username == "" )
     {
          alert("username cannot be empty");
          
          document.getElementById("uname").style.borderColor = "red";
          return false;
  
    }
    else if(username.length < 3)
    {
        alert("username must be greater than 3");
          
          document.getElementById("uname").style.borderColor = "red";
          return false;
    }
    else if(username.length > 30)
    {
        alert("username must be less than 30");
          
          document.getElementById("uname").style.borderColor = "red";
          return false;
    }
  
    if(password == ""){
            alert("password must be filled");
            document.getElementById("psw").style.borderColor = "red";
            return false;
  
    }
    else if(password.length < 2)
    {
        alert("password must be greater than 2");
            document.getElementById("psw").style.borderColor = "red";
            return false;
    }
    else if(password.length > 30)
    {
        alert("password must be less than 30");
            document.getElementById("psw").style.borderColor = "red";
            return false;
    }
}  