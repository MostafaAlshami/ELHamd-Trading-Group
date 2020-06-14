function validateaddcompany() {
    var companyname = document.getElementById("companyname").value;
    var address = document.getElementById("address").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    //var URL = document.getElementById("URL").value;
    //var type = document.getElementById("type").value;


    if(companyname == "" )
    {
         alert("Company Name cannot be empty");
         
         document.getElementById("companyname").style.borderColor = "red";
         return false;
 
   }

   if(address == "" )
     {
          alert("Address cannot be empty");
          
          document.getElementById("address").style.borderColor = "red";
          return false;
  
    }

    if(email == "" )
     {
          alert("Email cannot be empty");
          
          document.getElementById("email").style.borderColor = "red";
          return false;
  
    }

    if(phone == "" )
     {
          alert("Phone Number cannot be empty");
          
          document.getElementById("phone").style.borderColor = "red";
          return false;
  
    }
    /*
    if(URL == "" )
     {
          alert("URL cannot be empty");
          
          document.getElementById("URL").style.borderColor = "red";
          return false;
  
    }
    
    if(Type == "" )
     {
          alert("Type be empty");
          
          document.getElementById("type").style.borderColor = "red";
          return false;
  
    }
    */


}

function validateaeditcomp() {
    var companyname = document.getElementById("companyname2").value;
    var address = document.getElementById("address2").value;
    var email = document.getElementById("email2").value;
    var phone = document.getElementById("phone2").value;
    var URL = document.getElementById("URL2").value;
   // var type = document.getElementById("type2").value;

    if(companyname == "" )
    {
         alert("Company Name cannot be empty");
         
         document.getElementById("companyname2").style.borderColor = "red";
         return false;
 
   }

   if(address == "" )
     {
          alert("Address cannot be empty");
          
          document.getElementById("address2").style.borderColor = "red";
          return false;
  
    }

    if(email == "" )
     {
          alert("Email cannot be empty");
          
          document.getElementById("email2").style.borderColor = "red";
          return false;
  
    }

    if(phone == "" )
     {
          alert("Phone Number cannot be empty");
          
          document.getElementById("phone2").style.borderColor = "red";
          return false;
  
    }
    
    /*
    if(URL == "" )
     {
          alert("URL cannot be empty");
          
          document.getElementById("URL2").style.borderColor = "red";
          return false;
  
    }*/

    // if(type == "" )
    //  {
    //       alert("URL cannot be empty");
          
    //       document.getElementById("type2").style.borderColor = "red";
    //       return false;
  
    // }


}