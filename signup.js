function val(){

     var username=document.form.name;
     var password=document.form.password;
      var cpassword=document.form.cpassword;
     if(passwordval(password)){
    if(cpasswordval(cpassword,password))
    {
   
    return true;
}
}return false;
}
function passwordval(password)
{
var pass_val=password.value;
if(pass_val.length==0 || pass_val.length<8)
{
    if(pass_val.length==0)
    {
    alert("enter the password");
    password.focus();
     return false;
}
else{
alert("password must be atleast 8 char");
password.focus();
return false;
    
}
}
else{
    return true;
}

}



function cpasswordval(cpassword,password)
{

var cpass_val=cpassword.value.length;
if(cpass_val==0 || password.value != cpassword.value)
{
    if(cpass_val.length==0)
    {
    alert("enter the password");
    cpassword.focus();
     return false;
}
else{
     alert("enter the correct confirm password");
    cpassword.focus();
     return false;

}

}
else{
    return true;
}

}

}


