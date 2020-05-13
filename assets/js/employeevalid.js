function validateaddemp() {
    var code = document.getElementById("Code").value;
    var firstname = document.getElementById("Fname").value;
    var lastname = document.getElementById("Lname").value;
    var email = document.getElementById("Email").value;
    var addres = document.getElementById("Address").value;
    var phone = document.getElementById("Phoneno").value;
    var degree = document.getElementById("Edudegree").value;
    var dob = document.getElementById("Birthdate").value;
    var empdate = document.getElementById("Empdate").value;
    var salary = document.getElementById("Salary").value;

    if(code == "" )
     {
          alert("Code cannot be empty");
          
          document.getElementById("Code").style.borderColor = "red";
          return false;
  
    }

     if(firstname == "" )
     {
          alert("First Name cannot be empty");
          
          document.getElementById("Fname").style.borderColor = "red";
          return false;
  
    }

     if(lastname == "" )
     {
          alert("Last Name cannot be empty");
          
          document.getElementById("Lname").style.borderColor = "red";
          return false;
  
    }

     if(email == "" )
     {
          alert("Email cannot be empty");
          
          document.getElementById("Email").style.borderColor = "red";
          return false;
  
    }

     if(addres == "" )
     {
          alert("Address cannot be empty");
          
          document.getElementById("Address").style.borderColor = "red";
          return false;
  
    }

     if(phone == "" )
     {
          alert("phone number cannot be empty");
          
          document.getElementById("Phoneno").style.borderColor = "red";
          return false;
  
    }

     if(degree == "" )
     {
          alert("Education Degree cannot be empty");
          
          document.getElementById("Edudegree").style.borderColor = "red";
          return false;
  
    }

     if(dob == "" )
     {
          alert("Birthdate cannot be empty");
          
          document.getElementById("Birthdate").style.borderColor = "red";
          return false;
  
    }

     if(empdate == "" )
     {
          alert("Employment Date cannot be empty");
          
          document.getElementById("Empdate").style.borderColor = "red";
          return false;
  
    }

     if(salary == "" )
     {
          alert("salary cannot be empty");
          
          document.getElementById("Salary").style.borderColor = "red";
          return false;
  
    }
}

function validateaeditemp() {
    var code = document.getElementById("Code2").value;
    var firstname = document.getElementById("Fname2").value;
    var lastname = document.getElementById("Lname2").value;
    var email = document.getElementById("Email2").value;
    var addres = document.getElementById("Address2").value;
    var phone = document.getElementById("Phoneno2").value;
    var degree = document.getElementById("Edudegree2").value;
    var dob = document.getElementById("Birthdate2").value;
    var empdate = document.getElementById("Empdate2").value;
    var salary = document.getElementById("Salary2").value;

    if(code == "" )
     {
          alert("Code cannot be empty");
          
          document.getElementById("Code2").style.borderColor = "red";
          return false;
  
    }

    else if(firstname == "" )
     {
          alert("First Name cannot be empty");
          
          document.getElementById("Fname2").style.borderColor = "red";
          return false;
  
    }

    else if(lastname == "" )
     {
          alert("Last Name cannot be empty");
          
          document.getElementById("Lname2").style.borderColor = "red";
          return false;
  
    }

    else if(email == "" )
     {
          alert("Email cannot be empty");
          
          document.getElementById("Email2").style.borderColor = "red";
          return false;
  
    }

    else if(addres == "" )
     {
          alert("Address cannot be empty");
          
          document.getElementById("Address2").style.borderColor = "red";
          return false;
  
    }

    else if(phone == "" )
     {
          alert("phone number cannot be empty");
          
          document.getElementById("Phoneno2").style.borderColor = "red";
          return false;
  
    }

    else if(degree == "" )
     {
          alert("Education Degree cannot be empty");
          
          document.getElementById("Edudegree2").style.borderColor = "red";
          return false;
  
    }

    else if(dob == "" )
     {
          alert("Birthdate cannot be empty");
          
          document.getElementById("Birthdate2").style.borderColor = "red";
          return false;
  
    }

    else if(empdate == "" )
     {
          alert("Employment Date cannot be empty");
          
          document.getElementById("Empdate2").style.borderColor = "red";
          return false;
  
    }

    else if(salary == "" )
     {
          alert("salary cannot be empty");
          
          document.getElementById("Salary2").style.borderColor = "red";
          return false;
  
    }
}
