function login()                                    
 { 
    var name = document.f1.name.value;   
    var Password = document.f1.Password.value;

  if (name == "" || Password == "")
     {
      alert("Please Fill out all the details");
      return false;
     }

  else if(Password.length<8)
     {
      alert("Password must be at least 8 characters long.");
      return false;
     }    

else if(Password.search(/[0-9]/)==-1)
     {
      alert("Password must contain 1 number.");
      return false;
     }    

else if(Password.search(/[a-z]/)==-1)
     {
      alert("Password must contain 1 lowercase.");
      return false;
     }    

else if(Password.search(/[A-Z]/)==-1)
     {
      alert("Password must contain 1 uppercase.");
      return false;
     }    

else if(Password.search(/[/(!\@\#\$\%\^\&\*\:\"\<\>\?]/)==-1)
     {
      alert("Password must contain 1 special chr.");
      return false;
     }   

 }

function signup()
{
    var name1 = document.f2.fname.value;
    var name2 = document.f2.lname.value;
    var mail = document.f2.mail.value;
    var no = document.f2.pno.value;
    var pass = document.f2.pass.value;
    var cpass = document.f2.cpass.value;

  if(pass=="" || cpass=="" || name1=="" || name2=="" || mail=="" || no=="")
  {
    alert("Please Fill out all the details");
    return false;
  }

  else if (no>10 && no<10) 
  {
    alert("Please Fill out the correct Phone number");
  }

 else if(pass.length<8)
     {
      alert("Password must be at least 8 characters long.");
      return false;
     }    

else if(pass.search(/[0-9]/)==-1)
     {
      alert("Password must contain 1 number.");
      return false;
     }    

else if(pass.search(/[a-z]/)==-1)
     {
      alert("Password must contain 1 lowercase.");
      return false;
     }    

else if(pass.search(/[A-Z]/)==-1)
     {
      alert("Password must contain 1 uppercase.");
      return false;
     }    

else if(pass.search(/[/(!\@\#\$\%\^\&\*\:\"\<\>\?]/)==-1)
     {
      alert("Password must contain 1 special chr.");
      return false;
     } 

 else if(cpass!=pass)
  {  
   alert("Both the Passwords must be same");
   return false;   
  }
}

function pas()
 {
    var pass = document.f3.pass.value;
    var cpass = document.f3.cpass.value;

  if(pass=="")
  {
    alert("Plz enter the password.");
    return false;
  }

else if(pass.length<8)
     {
      alert("Password must be at least 8 characters long.");
      return false;
     }    

else if(pass.search(/[0-9]/)==-1)
     {
      alert("Password must contain 1 number.");
      return false;
     }    

else if(pass.search(/[a-z]/)==-1)
     {
      alert("Password must contain 1 lowercase.");
      return false;
     }    

else if(pass.search(/[A-Z]/)==-1)
     {
      alert("Password must contain 1 uppercase.");
      return false;
     }    

else if(pass.search(/[/(!\@\#\$\%\^\&\*\:\"\<\>\?]/)==-1)
     {
      alert("Password must contain 1 special chr.");
      return false;
     }   

  else if(pass!=cpass)
  {  
   alert("Both the Passwords must be same");
   return false;  
  } 
}

function seekplus()
{
  music.currentTime = music.currentTime+15;
}

function seekminus()
{
  music.currentTime = music.currentTime-15;
}